<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class alm_alumno_model extends CI_Model
{
public function index_model(){
    $alumno=$this->db->("SELECT * FROM	alm_alumno");
    return $alumno->result();
}
public function insertar_alumno($data){
    $alumno=$this->db->insert('alm_alumno',$data);
}

public function delete_grado($alm_id){
$this->db->where('alm_id', $alm_id);
$this->db->delete('alm_alumno')
}
}
?>