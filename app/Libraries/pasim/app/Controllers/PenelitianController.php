<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenelitianModel;
use App\Models\FakultasModel;

class PenelitianController extends BaseController
{
	protected $penelitian;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->penelitian=new PenelitianModel;
	}
	public function index()
	{
		$data=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->get()->getResult('array');
		return view('/admin/lppm/penelitian/index',[
			'data_fakultas' =>$data,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}
	public function create()
	{
		$fakultas=new FakultasModel();
		return view('/admin/lppm/penelitian/create',[
			'fakultas'=>$fakultas->findAll(),
		]);
	}

	public function save()
	{

		$this->penelitian->save([
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'tahun'=>$this->request->getVar('tahun'),
			'penelitian'=>$this->request->getVar('penelitian')
		]);
		return redirect()->to('/penelitian');
	}

	public function edit($id)
	{
		$fakultas = new FakultasModel();
		
		$data=[
			'penelitian'=>$this->penelitian->find($id),
			'fakultas'=>$fakultas->findAll(),
		];
		return view('/admin/lppm/penelitian/edit',$data);
	}
	public function update($id)
	{

		$data=[
			'id'=>$id,
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'tahun'=>$this->request->getVar('tahun'),
			'penelitian'=>$this->request->getVar('penelitian')
		];
		$this->penelitian->update($id,$data);

		return redirect()->to('/penelitian');

	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->penelitian->delete($id);
		}
		return redirect()->to('/penelitian');
	}
}
