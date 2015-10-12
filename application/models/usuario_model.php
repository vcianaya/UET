<?php
if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');

Class Usuario_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
 
    function obtenerListaUsuarios()
    {
        $this->load->database();
        $usuario = $this->db->get('usuario');
        return $usuario->result();
    }

    function login($cuenta_user, $contrasena_user)
    {
        $this -> db -> select('id_usuario, id_personal, cuenta_user, contrasena_user');
        $this -> db -> from('usuario');
        $this -> db -> where('cuenta_user', $cuenta_user);
        $this -> db -> where('contrasena_user', MD5($contrasena_user));
        $this -> db -> limit(1);

        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function getNombreUsuario($id_personal)
    {
        $this -> db -> select('nombre, apellido_pat, apellido_mat');
        $this -> db -> from('personal');
        $this -> db -> where('id_personal', $id_personal);
        $this -> db -> limit(1);
        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
        {
            $result = $query->result();
            foreach($result as $row)
            {
                $nombre_usuario = $row->nombre." ".$row->apellido_pat." ".$row->apellido_mat;
            }
            return($nombre_usuario);
        }
        else
        { 
            return(false);
        }
    }
}
?>
