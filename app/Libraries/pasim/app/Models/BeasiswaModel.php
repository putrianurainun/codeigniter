<?php

namespace App\Models;

use CodeIgniter\Model;

class BeasiswaModel extends Model
{
	protected $table                = 'beasiswa';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','nama','keterangan'];
	protected $useTimestamps        = true;

	public function getBeasiswa($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
}
