<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Personal extends CI_Controller 
{
  private $persona=array();
  public function __construct()
  {
    parent::__construct();
    $this->load->model('personal_model'); 
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->database('default');
  }

  public function datos_personal()
    {
        $persona = array(
  
                'CARNET' => $this->input->post('ci'),
                'EXPEDIDO' => strtoupper($this->input->post('expedido')),
                'NOMBRE' => strtoupper($this->input->post('nombre')),
                'APELLIDO_PAT' => strtoupper($this->input->post('paterno')),
                'APELLIDO_MAT' => strtoupper($this->input->post('materno')),
                'APELLIDO_CAS' => strtoupper($this->input->post('casada')),
                'GENERO' => strtoupper($this->input->post('genero')),
                'ESTADO_CIVIL' => strtoupper($this->input->post('ecivil')),
                'FECHA_NAC' => $this->input->post('fecha_nac'),
                'DEPARTAMENTO' => $this->input->post('departamento'),
                'PROFESION' => strtoupper($this->input->post('profesion')),
                'CARGO' => strtoupper($this->input->post('cargo')),
                'TELEFONO' => $this->input->post('telefono'),
                'CELULAR' => $this->input->post('celular'),
                'DIRECCION' => strtoupper($this->input->post('direccion')),
                'CORREO' => strtoupper($this->input->post('email')),
                'ESTADO' => strtoupper($this->input->post('estado')),
                'OBSERVACION' => strtoupper($this->input->post('obs')),
                'FECHA_REGISTRO' => (date('Y').'-'.date('m').'-'.date('d')),
                'HORA_REGISTRO' => date('H:i:s')
                );
        return $persona;
    }

    public function eliminar()
    {
        $id = $this->uri->segment(3);
        if ($this->personal_model->eliminar_personal($id)) 
        {
            redirect('personal/leer');
        }
    }

    public function actualizar()
    {
        $personal = array();
        $personal = $this->datos_personal();
        $id = $this->input->post('id');
        if($this->personal_model->actualizar_personal($id, $personal))
        {
            echo "'correcto', 'Los Datos del personal se modificaron correctamente...')";
            redirect('personal/nuevo','refresh');
        }else{
            echo "'incorrecto', 'Los Datos del personal no se modificaron correctamente...')";
            redirect('personal/nuevo','refresh');
        }
    }
    public function recibirFormulario(){
            //name del campo, titulo, restricciones
                    $this->form_validation->set_rules('ci', 'Carnet de identidad', 'required|min_length[5]|max_length[10]|numeric');
                    $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|max_length[100]|alpha|trim');
                    $this->form_validation->set_rules('apellido_pat', 'Apellido paterno', 'required|min_length[3]|max_length[100]|alpha||trim');
                    $this->form_validation->set_rules('apellido_mat', 'Apellido materno', 'required|min_length[3]|alpha|trim');
                    $this->form_validation->set_rules('apellido_cas', 'Apellido casada', 'min_length[3]|alpha||trim');
                    $this->form_validation->set_rules('correo', 'Email', 'required|min_length[3]|valid_email');
                    $this->form_validation->set_rules('telefono', 'Telefono', 'required|min_length[3]|numeric|trim');
                    $this->form_validation->set_rules('celular', 'Celular', 'required|min_length[3]|numeric|trim');
                    //Mensajes
            // %s es el nombre del campo que ha fallad
                    $this->form_validation->set_message('required','El campo %s es obligatorio');
                    $this->form_validation->set_message('alpha','El campo %s debe estar compuesto solo por letras');
                    $this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
                    $this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
                 if($this->form_validation->run()==TRUE){ //Si la validación es correcta
                        redirect('personal/insertar');  
             }   
             else
                {
                                    
                        $this->load->view('cabecera/header');
                        $this->load->view('personal/personal_view');
                        $this->load->view('footer/footer');
                }
         }

    public function insertar()
    {  
        $personal = array();
        $personal = $this->datos_personal();
        if($this->personal_model->insertar_personal($personal))
        {
            echo "Los Datos del personal se registraron correctamente";
        }
        else
        {
            echo "Los Datos del personal no se registraron correctamente, favor verificar...";
        } 
    }


      public function index()
    {
                 $this->load->view('cabecera/header2');
                 $this->load->view('menu/menu');
                 $this->load->view('personal/personal_view');
                 $this->load->view('footer/footer');
    }

      public function personalc()
    {
                 $this->load->view('cabecera/header2');
                 $this->load->view('menu/menu');
                 $this->load->view('personal/buscafecha_view');
                 $this->load->view('footer/footer');

                 
    }
    public function personald()
    {
                 $this->load->view('cabecera/header2');
                 $this->load->view('menu/menu');
                 $this->load->view('personal/buscadepartamento_view');
                 $this->load->view('footer/footer');

                 
    }

    public function personale()
    {
                 $this->load->view('cabecera/header2');
                 $this->load->view('menu/menu');
                 $this->load->view('personal/buscaestado_view');
                 $this->load->view('footer/footer');

                 
    }
    public function personaln()
    {            
                $this->load->view('cabecera/header2');
                $this->load->view('menu/menu');
                $this->load->view('personal/buscanombre_view');
                $this->load->view('footer/footer');                 
    }
    public function personalp()
    {
                 $this->load->view('cabecera/header2');
                 $this->load->view('menu/menu');
                 $this->load->view('personal/buscaprofesion_view');
                 $this->load->view('footer/footer');

                 
    }
}

  

