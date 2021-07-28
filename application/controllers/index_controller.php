<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 

 class index_controller extends CI_Controller
 {
 	
    public	function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('grd_grado_model');
 	}

 	public function index()
 	{
      $grado=$this->grd_grado_model->lista_grado();
      $data['grado']=$grado;
      $this->load->view('grado_vistas',$data);

 	}
	 // cargar la vista de nuevo grado
	 public function nuevo_grado()
	 {
		$grado=$this->grd_grado_model->lista_grado();
		$data['grado']=$grado;
		$this->load->view('grado/grado_nuevo',$data);
	 }
	 //guardar grado
	 public function guardar_grado() {
		$data['grd_grado']=$_POST["grado"];
		$this->grd_grado_model->insertar_grado($data);
 
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
		$data['grd_grado']=$_POST["grado"];
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