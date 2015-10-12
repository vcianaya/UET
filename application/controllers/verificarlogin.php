<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerificarLogin extends CI_Controller 
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('usuario_model','',TRUE);
  }

  function index()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Nombre de Usuario', 'trim|required|xss_clean');
    $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|xss_clean|callback_check_database');
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('cabecera/header');
      $this->load->view('login/login_view');
      $this->load->view('footer/footer');
    }
    else
    {
      redirect('inicio', 'refresh');
    }
  }
  
  function check_database($password)
  {
    $username = $this->input->post('username');
    $result   = $this->usuario_model->login($username, $password);
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
            'id_usuario'  => $row->id_usuario,
            'id_personal' => $row->id_personal,
            'cuenta_user' => $row->cuenta_user,
            'nombre_usuario' => $this->usuario_model->getNombreUsuario($row->id_personal)
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Los datos ingresados de Usuario o contraseña son incorrectos');
      return false;
    }
  }
}
?>