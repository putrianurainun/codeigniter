<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
class FakultasController extends BaseController
{
	protected $fakultas;
	function __construct()
	{
		$this->fakultas=new FakultasModel;
	}

	public function index()
	{
		$data=[
			'fakultas'=>$this->fakultas->getFakultas()
		];
		return view('/admin/fakultas/index',$data);
	}

	public function create()
	{
		return view('/admin/fakultas/create');
	}

	public function save()
	{
		$this->fakultas->save([
			'nama_fakultas'=>$this->request->getVar('nama_fakultas')
		]);
		return redirect()->to('/fakultas');
	}

	public function edit($id)
	{
		$dta=[
			'fakultas'=>$this->fakultas->getFakultas($id)
		];
		return view('/admin/fakultas/edit',$dta);
	}
	public function update($id)
	{
		$this->fakultas->save([
			'id'=>$id,
			'nama_fakultas'=>$this->request->getVar('nama_fakultas')
		]);
		
		return redirect()->to('/fakultas');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->fakultas->delete($id);
		}
		return redirect()->to('/fakultas');
	}
}
