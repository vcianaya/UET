<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		//pagina inicial del sistema para vista nacional
		$this->load->view('cabecera/header2');
		$this->load->view('menu/menu');
		$this->load->view('frontal/galeria');
		$this->load->view('footer/footer');
	}
	public function institucional()
	{
		//pagina inicial del sistema para vista nacional
		$this->load->view('cabecera/header');
		$this->load->view('frontal/institucional');
		$this->load->view('footer/footer');
	}
}