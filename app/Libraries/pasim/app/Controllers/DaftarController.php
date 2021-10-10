<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaftarModel;
use App\Models\JurusanModel;

class DaftarController extends BaseController
{
	protected $daftar;
	protected $jurusan;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->daftar=new DaftarModel;
		$this->jurusan=new JurusanModel;
	}
	public function index()
	{
		$data=$this->db->table('daftar')
			->select('daftar.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=daftar.id_jurusan')
			->get()->getResult('array');
		return view('/admin/daftar/index',[
			'data' =>$data,
			'daftar'=>$this->daftar->getDaftar(),
		]);
	}

	public function create()
	{
		$jurusan=new JurusanModel();			
		return view('/user/daftar',[
			'jurusan'=>$jurusan->findAll(),
		]);
	}
	public function save()
	{
		$this->daftar->save([
			'nama'=>$this->request->getVar('nama'),
			'nik'=>$this->request->getVar('nik'),
			'tempat_lahir'=>$this->request->getVar('tempat_lahir'),
			'tgl_lahir'=>$this->request->getVar('tgl_lahir'),
			'alamat'=>$this->request->getVar('alamat'),
			'agama'=>$this->request->getVar('agama'),
			'notel'=>$this->request->getVar('notel'),
			'email'=>$this->request->getVar('email'),
			'ibu'=>$this->request->getVar('ibu'),
			'jk'=>$this->request->getVar('jk'),
			'sd'=>$this->request->getVar('sd'),
			'thn_sd'=>$this->request->getVar('thn_sd'),
			'smp'=>$this->request->getVar('smp'),
			'thn_smp'=>$this->request->getVar('thn_smp'),
			'sma'=>$this->request->getVar('sma'),
			'thn_sma'=>$this->request->getVar('thn_sma'),
			'status'=>$this->request->getVar('status'),
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'kelas'=>$this->request->getVar('kelas'),
			'catatan'=>$this->request->getVar('catatan')
		]);
		session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
		return redirect()->to('/daftar');

	}

	public function edit($id)
	{
		$jurusan = new JurusanModel();
		
		$data=[
			'daftar'=>$this->daftar->find($id),
			'jurusan'=>$jurusan->findAll(),
		];
		return view('/admin/daftar/edit',$data);
	}
	public function update($id)
	{

		$data=[
			'id'=>$id,
			'nama'=>$this->request->getVar('nama'),
			'nik'=>$this->request->getVar('nik'),
			'tempat_lahir'=>$this->request->getVar('tempat_lahir'),
			'tgl_lahir'=>$this->request->getVar('tgl_lahir'),
			'alamat'=>$this->request->getVar('alamat'),
			'agama'=>$this->request->getVar('agama'),
			'notel'=>$this->request->getVar('notel'),
			'email'=>$this->request->getVar('email'),
			'ibu'=>$this->request->getVar('ibu'),
			'jk'=>$this->request->getVar('jk'),
			'sd'=>$this->request->getVar('sd'),
			'thn_sd'=>$this->request->getVar('thn_sd'),
			'smp'=>$this->request->getVar('smp'),
			'thn_smp'=>$this->request->getVar('thn_smp'),
			'sma'=>$this->request->getVar('sma'),
			'thn_sma'=>$this->request->getVar('thn_sma'),
			'status'=>$this->request->getVar('status'),
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'kelas'=>$this->request->getVar('kelas'),
			'catatan'=>$this->request->getVar('catatan')
		];
		$this->matkul->update($id,$data);

		return redirect()->to('/daftaradmin');

	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->daftar->delete($id);
		}
		return redirect()->to('/daftaradmin');
	}

}
