<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TV_Shows extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tv_shows_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/index.php/tv_shows
	 * 		http://example.com/index.php/tv_shows/index
	 * 		http://example.com/index.php/tv-shows
	 * 		http://example.com/index.php/tv-shows/index
	 */
	public function index()
	{
		$data['tv_shows'] = $this->tv_shows_model->get();

		$this->load->view('templates/header', $data);
		$this->load->view('tv_shows/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
