<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 

 class alumno_controller extends CI_Controller
 {
 	
    public	function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('alm_alumno_model');
 	}

 	public function alumno_lista()
 	{
      $alumno=$this->alm_alumno_model->lista_alumno();
      $data['alumno']=$alumno;
      $this->load->view('alumno_vistas/alumno_lista',$data);

 	}
	 // cargar la vista de nuevo grado
	 public function nuevo_alumno()
	 {
		$alumno=$this->alm_alumno_model->lista_grado();
		$data['grado']=$alumno;
		$this->load->view('alumno_vistas/grado_vistas',$data);
	 }
	 //guardar grado
	 public function guardar_grado() {
		$data['grado']=$_POST["grado"];
		$this->grd_grado_model->insertar($data);
 
	   redirect('/index_controller/');
	}
	//obtener el id de grado
	public function accion_grado(){
		$data['grd_id'] = $this->grd_grado_model->obtener_grado($_REQUEST["grd_id"]);

   	$this->load->view('./grado/grado_upd', $data);
	}
	//actualizar grado//
	public function actualizar_grado() {
		$data['grd_id']=$_POST["grd_id"];
		$data['grado']=$_POST["grado"];
	   $this->grd_grado_model->update_grado($data);
	   redirect('/index_controller/');
	}
    //eliminar grado//
	public function delete_grado() {
		$grd_id = $_REQUEST["grd_id"];
		$this->grd_grado_model->delete_grado($grd_id);
	   redirect('/index_controller/');
	}

 }
 ?>