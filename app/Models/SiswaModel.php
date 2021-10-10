<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
	protected $table                = 'siswa';
	protected $primaryKey           = 'id_siswa';
	protected $allowedFields        = ['id_siswa','id_jurusan','nama_siswa'];
	protected $useTimestamps        = true;

	public function getSiswa($id_siswa=false){
		if ($id_siswa==false) {
			return $this->db->table('siswa')
			->join('jurusan','jurusan.id_jurusan=siswa.id_jurusan')
			->get()->getResultArray();
		}
		return $this->where(['id_siswa'=>$id_siswa])->first();
	}
}
