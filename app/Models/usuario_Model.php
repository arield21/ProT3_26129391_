<?php

namespace App\Models;

use CodeIgniter\Model;

class usuario_Model extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';
	protected $allowedFields = ['id', 'nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];


	public function getUsuarios(){

		return $this->findAll();

	}
	public function add($dato){

		return $this->save($dato);
	}

	public function getUsuario($id){

		return $this->where('id_usuario', $id)->first($id);

	}

	public function updateDatos($id, $datos){

		return $this->update($id, $datos);
	}

}