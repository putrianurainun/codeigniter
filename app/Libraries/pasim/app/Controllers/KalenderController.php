<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KalenderModel;
class KalenderController extends BaseController
{
	protected $kalender;
	function __construct()
	{
		$this->kalender=new KalenderModel;
	}
	public function index()
	{
		$data=[
			'kalender'=>$this->kalender->getKalender()
		];
		return view('/admin/akademik/kalender/index',$data);
	}

	public function create()
	{
		return view('/admin/akademik/kalender/create');
	}

	public function save()
	{
		$this->kalender->save([
			'tgl_mulai'=>$this->request->getVar('tgl_mulai'),
			'tgl_akhir'=>$this->request->getVar('tgl_akhir'),
			'kegiatan'=>$this->request->getVar('kegiatan'),
			'semester'=>$this->request->getVar('semester')
		]);
		return redirect()->to('/kalender');
	}

	public function edit($id)
	{
		$dta=[
			'kalender'=>$this->kalender->getKalender($id)
		];
		return view('/admin/akademik/kalender/edit',$dta);
	}
	public function update($id)
	{
		$this->kalender->save([
			'id'=>$id,
			'tgl_mulai'=>$this->request->getVar('tgl_mulai'),
			'tgl_akhir'=>$this->request->getVar('tgl_akhir'),
			'kegiatan'=>$this->request->getVar('kegiatan'),
			'semester'=>$this->request->getVar('semester')
		]);
		return redirect()->to('/kalender');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->kalender->delete($id);
		}
		return redirect()->to('/kalender');
	}
}
