<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Characters_model extends CI_Model {

    public $table = 'characters';

	public function get($slug = NULL)
	{
		$this->db->select($this->table . '.*, tv_shows.name as tv_show_name');
		$this->db->join('tv_shows', 'tv_shows.id = ' . $this->table . '.tv_show_id');
		if ($slug === NULL) {
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get($this->table);
			return $query->result_array();

		} else {
			$query = $this->db->get_where($this->table, [$this->table . '.slug' => $slug]);
			return $query->row_array();
		}
	}

	public function get_by_tv_show($tv_show_id)
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get_where($this->table, ['tv_show_id' => $tv_show_id]);
		return $query->result_array();
	}

	public function set($slug = NULL)
	{
		if ($slug === NULL) {
			$name = $this->input->post('name');
			$slug = url_title(convert_accented_characters($name), 'dash', TRUE);
			$data = [
				'name' => $name,
				'slug' => $slug,
				'image_url' => $this->input->post('image_url'),
				'tv_show_id' => $this->input->post('tv_show_id'),
			];
			return $this->db->insert($this->table, $data);

		} else {
			$data = [];
			if ($name = $this->input->post('name')) {
				$new_slug = url_title(convert_accented_characters($name), 'dash', TRUE);
				$data['name'] = $name;
				$data['slug'] = $new_slug;
			}
			if ($image_url = $this->input->post('image_url'))
				$data['image_url'] = $image_url;
			if ($tv_show_id = $this->input->post('tv_show_id'))
				$data['tv_show_id'] = $tv_show_id;
			$this->db->where('slug', $slug);
			return $this->db->update($this->table, $data);
		}
	}

	public function delete($slug)
	{
		return $this->db->delete($this->table, ['slug' => $slug]);
	}

}
