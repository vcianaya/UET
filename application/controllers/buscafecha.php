<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Buscafecha extends CI_Controller 
{  
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
             $this->load->view('personal/buscafecha_view');
             
          
  }
}
?>