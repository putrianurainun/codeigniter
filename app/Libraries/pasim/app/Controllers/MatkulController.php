<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;
use App\Models\MatkulModel;

class MatkulController extends BaseController
{
	protected $matkul;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->matkul=new MatkulModel;
	}
	public function index()
	{
		$data=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->get()->getResult('array');
		return view('/admin/jurusan/matkul/index',[
			'data_jurusan' =>$data,
			'matkul'=>$this->matkul->findAll(),
		]);
	}
	public function create()
	{
		$jurusan=new JurusanModel();
		return view('/admin/jurusan/matkul/create',[
			'jurusan'=>$jurusan->findAll(),
		]);
	}

	public function save()
	{

		$this->matkul->save([
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'kode'=>$this->request->getVar('kode'),
			'nama_matkul'=>$this->request->getVar('nama_matkul'),
			'sks'=>$this->request->getVar('sks'),
			'semester'=>$this->request->getVar('semester')
		]);
		return redirect()->to('/matkul');
	}

	public function edit($id)
	{
		$jurusan = new JurusanModel();
		
		$data=[
			'matkul'=>$this->matkul->find($id),
			'jurusan'=>$jurusan->findAll(),
		];
		return view('/admin/jurusan/matkul/edit',$data);
	}
	public function update($id)
	{

		$data=[
			'id'=>$id,
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'kode'=>$this->request->getVar('kode'),
			'nama_matkul'=>$this->request->getVar('nama_matkul'),
			'sks'=>$this->request->getVar('sks'),
			'semester'=>$this->request->getVar('semester')
		];
		$this->matkul->update($id,$data);

		return redirect()->to('/matkul');

	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->matkul->delete($id);
		}
		return redirect()->to('/matkul');
	}
}
