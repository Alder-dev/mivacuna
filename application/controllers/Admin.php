<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model("Admin_model");
		$this->load->model("Auth_model");
		$this->load->library("session");
	}

	public function index()
	{
		echo "Vista Admin";
	}

	public function consultar_view()
	{
		$persona = $this->Admin_model->getOnePersona($id);
		$this->load->view('usuario/principal_view', array('persona' => $persona));
	}
	public function svacuna(){
		$this->load->view('usuario/svacuna_view');
	}

	public function autenticacion_view(){
		$this->load->view('admin/login_view');
	}
	public function registro_persona(){
		$data = array(
			'nombres' => $this->input->post("nombres"),
			'apellidos' => $this->input->post("apellidos"),
			'tdocumento' => $this->input->post("tdocumento"),
			'documento' => $this->input->post('documento'),
			'sexo' => $this->input->post('sexo'),
			'estrato' => $this->input->post('estrato'),
			'municipio' => $this->input->post('municipio'),
			'direccion' => $this->input->post('direccion'),
			'nacimiento' => $this->input->post('nacimiento'),
			'eps' => $this->input->post('eps'),
			'estado' => $this->input->post('estado'),
			'discapacidad' => $this->input->post('discapacidad'),
			'sangre' => $this->input->post('sangre'),
			'medico' => $this->input->post('medico'),
			'vacuna' => $this->input->post('vacuna'),
			'fechaVacuna' => $this->input->post('fechaVacuna'),
			'fechaPvacuna' => $this->input->post('fechaPvacuna'),
			'svacuna' => $this->input->post('svacuna'),
		);
		if ($this->Admin_model->agregar($data) >= 1){
			$this->session->set_flashdata("insert", true);
			redirect(base_url().'dashboard-admin');
		}else{
			redirect(base_url().'registro_persona');
		}
	}
	public function editar_persona($id){
		$persona = $this->Admin_model->getOnePersona($id);
		$this->load->view('admin/editar_persona_view', array('persona' => $persona));
	}
	public function actualizar(){
		$data = array(
			'nombres' => $this->input->post("nombres"),
			'apellidos' => $this->input->post("apellidos"),
			'tdocumento' => $this->input->post("tdocumento"),
			'documento' => $this->input->post('documento'),
			'sexo' => $this->input->post('sexo'),
			'estrato' => $this->input->post('estrato'),
			'municipio' => $this->input->post('municipio'),
			'direccion' => $this->input->post('direccion'),
			'nacimiento' => $this->input->post('nacimiento'),
			'eps' => $this->input->post('eps'),
			'estado' => $this->input->post('estado'),
			'discapacidad' => $this->input->post('discapacidad'),
			'sangre' => $this->input->post('sangre'),
			'medico' => $this->input->post('medico'),
			'vacuna' => $this->input->post('vacuna'),
			'fechaVacuna' => $this->input->post('fechaVacuna'),
			'fechaPvacuna' => $this->input->post('fechaPvacuna'),
			'svacuna' => $this->input->post('svacuna'),
		);

		$this->Admin_model->actualizar($this->input->post('id'), $data);
		$this->session->set_flashdata("mod", true);
		redirect(base_url().'dashboard-admin-modify');
	}

	public function eliminar_persona($id)
	{
        $del = $this->Admin_model->eliminar($id);
        $this->session->set_flashdata("delete", true);
        redirect(base_url().'dashboard-admin-modify'); 
	}

	public function centro_medico(){
		$this->load->view('admin/admin_view');
	}

	public function registro_persona_view(){
		$this->load->view('admin/registro_persona_view');
	}

	public function autenticacion(){
		$usuario = $this->Auth_model->autententicar($this->input->post('user'),$this->input->post('pass'));
		if($usuario){
			redirect(base_url().'dashboard-admin');
		}else{
			$this->session->set_flashdata("error_aut", true);
			redirect(base_url().'login-adm');
		}
	}

	public function centro_medico_list(){
		$datos_a_vista = array("personas" => $this->Admin_model->getAllPersonas());
		$this->load->view('admin/centro_medico_list', $datos_a_vista);
	}
	public function centro_medico_modify(){
		$datos_a_vista = array("personas" => $this->Admin_model->getAllPersonas());
		$this->load->view('admin/centro_medico_modify', $datos_a_vista);
	}
	public function ver_registros(){
		$datos_a_vista = array("personas" => $this->Admin_model->getAllPersonas());
		$this->load->view('admin/registro_extend_view', $datos_a_vista);
	}
	public function stats_v(){
		$this->load->view('admin/stats_view');
	}
}
