<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use App\Models\JurusanModel;
class DosenController extends BaseController
{
	protected $dosen;
	protected $jurusan;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->dosen=new DosenModel;
		$this->jurusan=new JurusanModel;
	}
	public function index()
	{	
	
		$data=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->get()->getResult('array');

		
		return view('/admin/jurusan/dosen/index',[
			'data' =>$data,
			'dosen'=>$this->dosen->getDosen(),
		]);
	}

	
	public function create()
	{
		$jurusan=new JurusanModel();			
		return view('/admin/jurusan/dosen/create',[
			'jurusan'=>$jurusan->findAll(),
		]);
	}

	public function save()
	{
		$this->dosen->save([
			'nidn'=>$this->request->getVar('nidn'),
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'nama'=>$this->request->getVar('nama'),
			'gelar'=>$this->request->getVar('gelar'),
			'pendidikan'=>$this->request->getVar('pendidikan'),
			'akademik'=>$this->request->getVar('akademik')
		]);

		return redirect()->to('/dosen');

	}

	public function edit($id)
	{
		$dta=[
			'dosen'=>$this->dosen->find($id),
			'jurusan'=>$this->jurusan->findAll(),
		];
		return view('/admin/jurusan/dosen/edit',$dta);
	}
	public function update($id)
	{

		$data=[
			'nidn'=>$id,
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'nama'=>$this->request->getVar('nama'),
			'gelar'=>$this->request->getVar('gelar'),
			'pendidikan'=>$this->request->getVar('pendidikan'),
			'akademik'=>$this->request->getVar('akademik')
		];

		$this->dosen->update($id,$data);

		return redirect()->to('/dosen');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->dosen->delete($id);
		}
		return redirect()->to('/dosen');
	}
}
