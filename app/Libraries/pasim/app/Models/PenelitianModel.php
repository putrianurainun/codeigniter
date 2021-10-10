<?php

namespace App\Models;

use CodeIgniter\Model;

class PenelitianModel extends Model
{
	
	protected $table                = 'penelitian';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','id_jurusan','tahun','penelitian'];

	protected $useTimestamps        = true;

	public function getPenelitian($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
	
}
