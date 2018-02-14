<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TV_Shows_model extends CI_Model {

    public $table = 'tv_shows';

	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}

	public function get($slug = NULL)
	{
		if ($slug === NULL) {
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get($this->table);
			return $query->result_array();

		} else {
			$query = $this->db->get_where($this->table, ['slug' => $slug]);
			return $query->row_array();
		}
	}

	public function set($slug = NULL)
	{
		if ($slug === NULL) {
			$name = $this->input->post('name');
			$slug = url_title($name, 'dash', TRUE);
			$data = [
				'name' => $name,
				'slug' => $slug,
				'image_url' => $this->input->post('image_url'),
				'youtube_embed_url' => $this->input->post('youtube_embed_url'),
				'short_description' => $this->input->post('short_description'),
			];
			return $this->db->insert($this->table, $data);

		} else {
			$data = [];
			if ($name = $this->input->post('name')) {
				$new_slug = url_title($name, 'dash', TRUE);
				$data['name'] = $name;
				$data['slug'] = $new_slug;
			}
			if ($image_url = $this->input->post('image_url'))
				$data['image_url'] = $image_url;
			if ($youtube_embed_url = $this->input->post('youtube_embed_url'))
				$data['youtube_embed_url'] = $youtube_embed_url;
			if ($short_description = $this->input->post('short_description'))
				$data['short_description'] = $short_description;
			$this->db->where('slug', $slug);
			return $this->db->update($this->table, $data);
		}
	}

}
