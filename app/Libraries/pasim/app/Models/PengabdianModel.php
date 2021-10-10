<?php

namespace App\Models;

use CodeIgniter\Model;

class PengabdianModel extends Model
{
	
	protected $table                = 'pengabdian';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','tahun','kegiatan'];

	// Dates
	protected $useTimestamps        = true;
	
	public function getPengabdian($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
	

}
