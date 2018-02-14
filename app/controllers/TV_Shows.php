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
	 * 		http://example.com/
	 * 		http://example.com/index.php
	 * 		http://example.com/index.php/
	 * 		http://example.com/index.php/series
	 * 		http://example.com/index.php/series/index
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

	/**
	 * View Page for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/index.php/serie/name
	 * 		http://example.com/index.php/tv_shows/view/name
	 * 		http://example.com/index.php/tv-shows/view/name
	 */
	public function view($slug = NULL)
	{
		if ($slug === NULL)
			show_404();

		$data['tv_show'] = $this->tv_shows_model->get($slug);

		if (empty($data['tv_show']))
			show_404();

		$this->load->view('templates/header', $data);
		$this->load->view('tv_shows/view', $data);
		$this->load->view('templates/footer', $data);
	}
}
