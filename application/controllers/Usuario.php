<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model("Admin_model");
		$this->load->library("session");
		
	}

	public function index()
	{
		echo "Vista usuario";;
	}

	public function consultar_view()
	{
		$this->load->view('usuario/principal_view');
	}

	public function realizar_consulta()
	{
		$mostrar = $this->Admin_model->consulta($this->input->post('tdocumento'),$this->input->post('documento'));
		if($mostrar){
			$this->load->view('usuario/mostrar_consulta_view', array('mostrar' => $mostrar));
		}else{
			$this->session->set_flashdata("error_cons", true);
			redirect(base_url().'realizar-consulta');
		}
	}

	public function svacuna(){
		$this->load->view('usuario/svacuna_view');
	}
	public function mostrar_consulta_vieww()
	{
		
	}
}
