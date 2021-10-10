<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengabdianModel;
class PengabdianController extends BaseController
{
	protected $pengabdian;
	function __construct()
	{
		$this->pengabdian=new PengabdianModel;
	}

	public function index()
	{
		$data=[
			'pengabdian'=>$this->pengabdian->getPengabdian()
		];
		return view('/admin/lppm/pengabdian/index',$data);
	}

	public function create()
	{
		return view('/admin/lppm/pengabdian/create');
	}

	public function save()
	{
		$this->pengabdian->save([
			'tahun'=>$this->request->getVar('tahun'),
			'kegiatan'=>$this->request->getVar('kegiatan')
		]);
		return redirect()->to('/pengabdian');
	}

	public function edit($id)
	{
		$dta=[
			'pengabdian'=>$this->pengabdian->getPengabdian($id)
		];
		return view('/admin/lppm/pengabdian/edit',$dta);
	}
	public function update($id)
	{
		$this->pengabdian->save([
			'id'=>$id,
			'tahun'=>$this->request->getVar('tahun'),
			'kegiatan'=>$this->request->getVar('kegiatan')
		]);
		
		return redirect()->to('/pengabdian');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->pengabdian->delete($id);
		}
		return redirect()->to('/pengabdian');
	}
}
