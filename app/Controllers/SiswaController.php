<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\JurusanModel;
class SiswaController extends BaseController
{
	function __construct()
	{
		$this->siswa=new SiswaModel();
		$this->jurusan=new JurusanModel();
	}
	public function index()
	{
		$data=[
			'title'=>'Data Siswa',
			'siswa'=>$this->siswa->getSiswa()
		];
		return view('siswa/index',$data);
	}
	public function create()
	{
		$data=[
			'title'=>'Tambah Siswa',
			'jurusan'=>$this->jurusan->getJurusan()
		];
		return view('siswa/create',$data);
	}
	public function save()
	{

		$this->siswa->save([
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'nama_siswa'=>$this->request->getVar('nama_siswa')
		]);
		return redirect()->to('/siswa');
	}
}

