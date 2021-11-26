<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->library("mongodb");
			$this->db = $this->mongodb->db()->personas;

		}

		public function agregar($personas){
			$result = $this->db->insertOne($personas);
			return $result->getInsertedCount();
		}

		public function getOnePersona($id){
			return $this->db->findOne(array(
				'_id' => $this->mongodb->getObjetId($id)));
		}

		public function editar($id){
			$res = $this->db->findOne(array('_id' => $id));
			$this->db->updateOne('personas', $res);
		}
		public function actualizar($id, $dato)
		{
			$resultado = $this->db->updateOne(array(
				'_id' => $this->mongodb->getObjetId($id)),

				array('$set' => $dato)
			);
			return $resultado->getModifiedCount();
			
		}

		public function eliminar($id)
		{
			$res = $this->db->deleteOne(array(
				'_id' => $this->mongodb->getObjetId($id)));
		}

		public function getAllPersonas(){
            return $this->db->find();
        }

        public function consulta($tdocumento, $documento){
			$dconsulta = $this->db->findOne(array(
				'tdocumento' => $tdocumento,
				'documento' => $documento
			));
			return $dconsulta;
		}
	}