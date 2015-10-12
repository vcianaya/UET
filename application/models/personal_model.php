<?php if ( ! defined('BASEPATH')) exit('No tiene acceso a este modulo');

Class Personal_model extends CI_Model
{
	  function __construct()
    {
        parent::__construct();
    }

    public function leer_personal()
    {
    	$this->db->order_by('id DESC');
    	$query= $this->db->get('personal');
    	return $query->result();
    }
    public function leer_personal_id($id)
    {
    	$this->db->where('id',$id);

    	$query= $this->db->get('personal');
    	return $query->row();
    }
    public function insertar_personal ($personal)
    {
    	if($this->db->insert('personal',$personal))
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
    public function actualizar_personal($id, $personal)
    {
    	$this->db->where('id',$id);
    	if($this->db->update('personal',$personal))
    		return true;
    	else
    		return false;
    }
    public function eliminar_personal($id)
    {
    	$this->db->where('id',$id);
    	if($this->db->delete('personal',$personal))
    		return true;
    	else
    		return false;
    }
 
    //CONSULTAS
    public function busca_profesion($profesion)
    {
        $this->db->select();
        $this->db->where('profesion',$profesion);
        $query= $this->db->get('personal');
        if ($query->num_rows() > 0)
            {return $query;}
            else
            {return false;}
    }
    
    public function busca_nombre($variable)
    {
        $this->db->select();
        $this->db->like('nombre',$variable);
        $this->db->or_like('apellido_pat',$variable);
        $this->db->or_like('apellido_mat',$variable);
        $this->db->or_like('apellido_cas',$variable);
        $query= $this->db->get('personal');
        if ($query->num_rows() > 0)
            {return $query;}
            else
            {return false;}
    }
    
    public function busca_departamento($depto)
    {
        $this->db->select();
        $this->db->where('departamento',$depto);
        $query = $this->db->get('personal');
        if ($query->num_rows() > 0)
            {return $query;}
            else
            {return false;}
    }
    
    public function busca_fecha($desde, $hasta)
    {
        $this->db->where('fecha_registro >=', $desde);
        $this->db->where('fecha_registro <=', $hasta);
        $query = $this->db->get('personal');
        if ($query->num_rows() > 0)
            {return $query;}
            else
            {return false;}
    }
    
    public function busca_estado($estado)
    {
        $this->db->select();
        $this->db->where('estado',$estado);
        $query=$this->db->get('personal');
        if ($query->num_rows() > 0)
            {return $query;}
            else
            {return false;}
    }

}


