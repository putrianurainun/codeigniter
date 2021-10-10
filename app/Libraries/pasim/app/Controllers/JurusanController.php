<?php

namespace App\Controllers;
use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Controllers\BaseController;

class JurusanController extends BaseController
{
	protected $jurusan;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->jurusan=new JurusanModel;
	}
	public function index()
	{	
		$jur=new JurusanModel();
		$fak=$this->db->table('jurusans')
			->select('jurusans.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=jurusans.id_fakultas')
			->get()->getResult('array');

			// var_dump($fak);die();

		return view('/admin/jurusan/index',[
			'data_fakultas' =>$fak,
			'jurusan'=>$jur->findAll(),
		]);


	}

	public function create()
	{
		$fakultas=new FakultasModel();
		return view('/admin/jurusan/create',[
			'fakultas'=>$fakultas->findAll(),
		]);
	}

	public function save()
	{

		$this->jurusan->save([
			'id_fakultas'=>$this->request->getVar('id_fakultas'),
			'nama_jurusan'=>$this->request->getVar('nama_jurusan')
		]);
		return redirect()->to('/jurusan');
	}

	public function edit($id)
	{
		$fakultas = new FakultasModel();
		
		$dta=[
			'jurusan'=>$this->jurusan->find($id),
			'fakultas'=>$fakultas->findAll(),
		];
		return view('/admin/jurusan/edit',$dta);
	}
	public function update($id)
	{

		$data=[
			'id'=>$id,
			'id_fakultas'=>$this->request->getVar('id_fakultas'),
			'nama_jurusan'=>$this->request->getVar('nama_jurusan')
		];

		$this->jurusan->update($id,$data);

		return redirect()->to('/jurusan');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->jurusan->delete($id);
		}
		return redirect()->to('/jurusan');
	}
}
