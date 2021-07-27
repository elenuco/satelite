<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 

 class materia_controller extends CI_Controller
 {
 	
    public	function __construct()
 	{
 		parent:: __construct();
 		$this->load->model('grd_grado_model');
 	}

 	public function index()
 	{
      $grado=$this->mat_materia_model->lista_materia();
      $data['materia']=$materia;
      $this->load->view('materia/materia_vistas',$data);

 	}
     
     public function nuevo_materia()
     {
         $n_materia=$this->
     }
 }
 ?>