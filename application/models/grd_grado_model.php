<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class grd_grado_model extends CI_Model
{
	//mostrar datos
	public function lista_grado()
	{
		 $grado=$this->db->query("SELECT TOP (1000) [grd_id] ,[grd_grado] FROM [dbo].[grd_grado]");
         return $grado->result();
	}
     //insertar grado
	public function insertar_grado($data) {
		$this->db->insert('grd_grado', $data);
	}
	//borrar grado
	public function delete_grado($grd_id) {
		$this->db->where('grd_id', $grd_id);
    	$this->db->delete('grd_grado');
    }
	//obtener el grd_id de  grado
	public function obtener_grado($grd_id){
		$this->db->where('grd_id', $grd_id);
		$grado= $this->db->get('grd_grado');
		return $grado->row();
    }
	//actualizar grado
	public function update_grado($data){
		$this->db->where('grd_id', $data['grd_id']);
    	return $this->db->update('grd_grado', $data);
   }

}
 ?>