<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TV_Shows_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('tv_shows');
			return $query->result_array();
		}
		$query = $this->db->get_where('tv_shows', ['slug' => $slug]);
		return $query->row_array();
	}

}
