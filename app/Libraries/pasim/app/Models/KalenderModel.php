<?php

namespace App\Models;

use CodeIgniter\Model;

class KalenderModel extends Model
{
	protected $table                = 'kalender';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','tgl_mulai','tgl_akhir','kegiatan','semester'];
	protected $useTimestamps        = true;

	public function getKalender($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
}
