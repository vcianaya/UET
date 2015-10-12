<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personaldos extends CI_Controller 
{
	public function __construct() {
        parent::__construct();
        $this->load->model('model_pdf', 'pdf');
        $this->load->model('personal_model');
    }
	public function index()
	{
		$this->load->view('cabecera/header2');
        $this->load->view('menu/menu');
		$this->load->view('personal2/personal_view2');
		$this->load->view('footer/footer');

	}
	public function prueba()
	{
		$this->load->view('cabecera/header2');
        $this->load->view('menu/menu');
		/*$this->load->view('personal2/personal_view2');*/
		$this->load->view('footer/footer');

	}
	public function exportarFpdf(){
		$data["personal"] = $this->pdf->getPersonal();
        $this->load->vars($data);
        $this->load->view("reporte-fpdf");	
	}
	
	public function exportarTcpdf(){
		$data["personal"] = $this->pdf->getUsuarios();
        $this->load->vars($data);
        $this->load->view("reporte-tcpdf");	
	}

	//--------------------------//
	//CONSULTAS
		public function busca_nombre()
		{
			$query = $this->input->post('nombre');
		    if($query)
		    {
		    	$result = $this->personal_model->busca_nombre($query);
		        if ($result != FALSE)
		        	{
		        		$data = array('result' => $result);
		        	}
		        	else
		        	{
		        		$data = array('result' =>'' );
		        	}
		    }
		    $this->load->view('cabecera/header2');
	        $this->load->view('menu/menu');
	        $this->load->view('titulo/tnombre');
			$this->load->view('personal2/personal_view2',$data);
			$this->load->view('footer/footer');
	    }
    	public function busca_profesion()
		{
			$query = $this->input->post('profesion');
		    if($query)
		    {
		    	$result = $this->personal_model->busca_profesion($query);
		        if ($result != FALSE)
		        	{
		        		$data = array('result' => $result);
		        	}
		        	else
		        	{
		        		$data = array('result' =>'' );
		        	}
		    }
		    $this->load->view('cabecera/header2');
	        $this->load->view('menu/menu');
	        $this->load->view('titulo/tprofesion');
			$this->load->view('personal2/personal_view2',$data);
			$this->load->view('footer/footer');
	    }
    public function busca_departamento()
	{
		$query = $this->input->post('expedido');
	    if($query)
	    {
	    	$result = $this->personal_model->busca_departamento($query);
	        if ($result != FALSE)
	        	{
	        		$data = array('result' => $result);
	        	}
	        	else
	        	{
	        		$data = array('result' =>'' );
	        	}
	    }
	    $this->load->view('cabecera/header2');
        $this->load->view('menu/menu');
        $this->load->view('titulo/depto');
		$this->load->view('personal2/personal_view2',$data);
		$this->load->view('footer/footer');
    }
        public function busca_estado()
	{
		$query = $this->input->post('estado');
        if($query)
	    {
	    	$result = $this->personal_model->busca_estado($query);
	        if ($result != FALSE)
	        	{
	        		$data = array('result' => $result);
	        	}
	        	else
	        	{
	        		$data = array('result' =>'' );
	        	}
	    }
	    $this->load->view('cabecera/header2');
        $this->load->view('menu/menu');
        $this->load->view('titulo/testado');
		$this->load->view('personal2/personal_view2',$data);
		$this->load->view('footer/footer');
    }
            public function busca_fecha()
	{
		$query = $this->input->post('desdefecha');
		$query1 = $this->input->post('hastafecha');
       	    if($query)
	    {
	    	$result = $this->personal_model->busca_fecha($query,$query1);
	        if ($result != FALSE)
	        	{
	        		$data = array('result' => $result);
	        	}
	        	else
	        	{
	        		$data = array('result' =>'' );
	        	}
	    }
	    $this->load->view('cabecera/header2');
        $this->load->view('menu/menu');
        $this->load->view('titulo/tfecha');
		$this->load->view('personal2/personal_view2',$data);
		$this->load->view('footer/footer');
    }
}