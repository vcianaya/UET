<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Inicio extends CI_Controller 
{  
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      //analizar los roles y modulos
      //si todo esta OK busca el formulario del sistema en el controlador
      redirect('principal','refresh');
    }
    else
    {
      redirect('login', 'refresh');
    }
  }

  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('login', 'refresh');
  }
}
?>