<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipas extends CI_Controller {
	
	public function __construct()
    {
	   	parent::__construct();
    	$this->load->model('Equipas_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['nomeEquipas'] = $this->Equipas_model->getNomeEquipas();
		$data['nomeJogadores'] = $this->Equipas_model->getNomeJogadores($data['nomeEquipas']);
		print_r($data);
		$this->load->view('template/header', $data);
		$this->load->view('equipas');
		$this->load->view('template/footer');
	}
}