<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
	protected $table                = 'jurusans';
	protected $primaryKey           = 'id';
	protected $allowedFields        = ['id','id_fakultas','nama_jurusan'];
	protected $useTimestamps        = true;


	public function getJurusan($id=false){
		
		if($id==false){
			return $this->db->table('jurusans')
					->join('fakultas','fakultas.id=jurusans.id_fakultas')
					->get()->getResultArray();
		}
		return $this->where(['id'=>$id])->first();
	}
}
