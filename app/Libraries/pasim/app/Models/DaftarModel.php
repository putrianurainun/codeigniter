<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
	protected $table                = 'daftar';
	protected $primaryKey           = 'id';
	
	protected $allowedFields        = ['id','nama','nik','tempat_lahir','tgl_lahir','alamat','agama','notel','email','ibu','jk','sd','thn_sd','smp','thn_smp','sma','thn_sma','status'	,'id_jurusan','kelas','catatan'];

	protected $useTimestamps        = true;


	public function getDaftar($id=false){
		if($id==false){
			return $this->findAll();
		}
		return $this->where(['id'=>$id])->first();
	}
}
