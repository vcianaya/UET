<?php

class Model_pdf extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getPersonal() {       	   
        $this->db->select('*');
        $q = $this->db->get('personal');
        return $q->result();
        $q->free_result();
    }

}

?>
