<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
	
	protected $table                = 'fakultas';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','nama_fakultas'];

	// Dates
	protected $useTimestamps        = true;


	public function getFakultas($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
	
	
}
