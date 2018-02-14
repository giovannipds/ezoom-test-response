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
	 * 		http://example.com/index.php/serie/slug
	 * 		http://example.com/index.php/tv_shows/view/slug
	 * 		http://example.com/index.php/tv-shows/view/slug
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

	/**
	 * Create Page for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/index.php/series/inserir
	 * 		http://example.com/index.php/series/editar/slug
	 * 		http://example.com/index.php/tv_shows/create_update
	 * 		http://example.com/index.php/tv-shows/create_update
	 * 		http://example.com/index.php/tv_shows/create_update/slug
	 * 		http://example.com/index.php/tv-shows/create_update/slug
	 */
	public function create_update($slug = NULL)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data = [];
		if ($slug) {
			$data['tv_show'] = $this->tv_shows_model->get($slug);
			if (empty($data['tv_show']))
				show_404();
		}

		$this->form_validation->set_rules('name', 'Nome', 'required');
		$this->form_validation->set_rules('image_url', 'Endereço da Imagem', 'required|valid_url');
		$this->form_validation->set_rules('youtube_embed_url', 'Endereço do Vídeo YouTube para incorporar', 'required|valid_url');
		$this->form_validation->set_rules('short_description', 'Descrição Curta', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('tv_shows/create_update', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->tv_shows_model->set($slug);
			if ($slug) {
				$this->session->set_flashdata('success_message', 'Sua série foi atualizada com exito.');
			} else {
				$this->session->set_flashdata('success_message', 'Sua série foi inserida com exito.');
			}
			redirect('/');
		}
	}

}
