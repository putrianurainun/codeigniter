<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
	protected $table                = 'galeri';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','id_jurusan','kegiatan','foto'];

	// Dates
	protected $useTimestamps        = true;


	public function getFoto($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
}
