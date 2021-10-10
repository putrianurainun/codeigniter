<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
	protected $table                = 'matkul';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','id_jurusan','kode','nama_matkul','sks','semester'];
	protected $useTimestamps        = true;

	public function getMatkul($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
}
