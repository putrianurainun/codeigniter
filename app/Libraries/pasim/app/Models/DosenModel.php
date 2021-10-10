<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
	
	protected $table                = 'dosen';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','nidn','id_jurusan','nama','gelar','pendidikan','akademik'];
	protected $useTimestamps        = true;

	public function getDosen($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
	
}
