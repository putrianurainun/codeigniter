<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BeasiswaModel;
class Beasiswa extends BaseController
{
	protected $beasiswa;
	function __construct()
	{
		
		$this->beasiswa=new BeasiswaModel;
	}
	public function index()
	{
		$data=[
			'beasiswa'=>$this->beasiswa->getBeasiswa()
		];
		return view('/admin/akademik/beasiswa/index',$data);
	}

	public function create()
	{
		return view('/admin/akademik/beasiswa/create');
	}

	public function save()
	{
		$this->beasiswa->save([
			'nama'=>$this->request->getVar('nama'),
			'keterangan'=>$this->request->getVar('keterangan')
		]);
		return redirect()->to('/beasiswa');
	}

	public function edit($id)
	{
		$dta=[
			'beasiswa'=>$this->beasiswa->getBeasiswa($id)
		];
		return view('/admin/akademik/beasiswa/edit',$dta);
	}
	public function update($id)
	{
		$this->beasiswa->save([
			'id'=>$id,
			'nama'=>$this->request->getVar('nama'),
			'keterangan'=>$this->request->getVar('keterangan')
		]);
		
		return redirect()->to('/beasiswa');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->beasiswa->delete($id);
		}
		return redirect()->to('/beasiswa');
	}
}
