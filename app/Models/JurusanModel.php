<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{

	protected $table                = 'jurusan';
	protected $primaryKey           = 'id_jurusan';
	protected $allowedFields        = ['id_jurusan','nama_jurusan'];
	protected $useTimestamps        = true;

	public function getJurusan($id_jurusan=false){
		if ($id_jurusan==false) {
			return $this->findAll();
		}
		return $this->where(['id_jurusan'=>$id_jurusan])->first();
	}
}
