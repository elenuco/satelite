<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class mat_materia_model extends CI_Model
{
	
	public function lista_materia()
	{
		 $materia=$this->db->query("SELECT [mat_id],[mat_nombre] FROM [dbo].[mat_materia]");
         return $materia->result();
	}
    //insertar materia
    public function insertar_materia($data) {
		$this->db->insert('materia', $data);
	}
    //borrar materia
    public function delete_materia($mat_id) {
		$this->db->where('$mat_id', $mat_id);
    	$this->db->delete('materia');
    }
	//obtener el id 
	public function obtener_grado($mat_id){
		$this->db->where('grd_id', $grd_id);
		$grado= $this->db->get('grd_grado');
		return $grado->result();
    }
}
 ?>