<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Characters extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tv_shows_model');
		$this->load->model('characters_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/
	 * 		http://example.com/index.php
	 * 		http://example.com/index.php/
	 * 		http://example.com/index.php/personagens
	 * 		http://example.com/index.php/personagens/index
	 * 		http://example.com/index.php/characters
	 * 		http://example.com/index.php/characters/index
	 */
	public function index()
	{
		$data['characters'] = $this->characters_model->get();

		$this->load->view('templates/header', $data);
		$this->load->view('characters/index', $data);
		$this->load->view('templates/footer', $data);
	}

	/**
	 * View Page for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/index.php/personagem/slug
	 * 		http://example.com/index.php/characters/view/slug
	 */
	public function view($slug = NULL)
	{
		if ($slug === NULL)
			show_404();
		$data['character'] = $this->characters_model->get($slug);
		if (empty($data['character']))
			show_404();
		$data['tv_show'] = $this->tv_shows_model->get_by_id($data['character']['tv_show_id']);

		$this->load->view('templates/header', $data);
		$this->load->view('characters/view', $data);
		$this->load->view('templates/footer', $data);
	}

	/**
	 * Create Page for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/index.php/personagens/inserir
	 * 		http://example.com/index.php/personagens/editar/slug
	 * 		http://example.com/index.php/characters/create_update
	 * 		http://example.com/index.php/characters/create_update/slug
	 */
	public function create_update($slug = NULL)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data = [];
		if ($slug) {
			$data['character'] = $this->characters_model->get($slug);
			if (empty($data['character']))
				show_404();
		}

		$data['tv_shows'] = $this->tv_shows_model->get();

		$this->form_validation->set_rules('name', 'Nome', 'required');
		$this->form_validation->set_rules('image_url', 'Endereço da Imagem', 'required|valid_url');
		if ($this->input->post('tv_show_id'))
			$this->form_validation->set_rules('tv_show_id', 'Série', 'callback_tv_show_check[tv_shows.id]');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('characters/create_update', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->characters_model->set($slug);
			if ($slug) {
				$this->session->set_flashdata('success_message', 'Seu personagem foi atualizado com exito.');
			} else {
				$this->session->set_flashdata('success_message', 'Seu personagem foi inserido com exito.');
			}
			redirect('/personagens');
		}
	}

        public function tv_show_check($str, $field)
        {
            if ($this->form_validation->is_unique($str, $field)) {
                $this->form_validation->set_message('tv_show_check', '{field} não se encontra no banco de dados');
                return FALSE;
            } else {
                return TRUE;
            }
        }

	/**
	 * Delete route for this controller.
	 *
	 * Maps to the following URLs
	 * 		http://example.com/index.php/personagens/deletar/slug
	 * 		http://example.com/index.php/characters/delete/slug
	 */
	public function delete($slug = NULL)
	{
		if ($slug === NULL)
			show_404();
		$character = $this->characters_model->get($slug);
		if (empty($character))
			show_404();
		$this->characters_model->delete($slug);
		$this->session->set_flashdata('success_message', 'Personagem deletado.');
		redirect('/personagens');
	}

}
