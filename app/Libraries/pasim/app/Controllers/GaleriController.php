<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;
use App\Models\FakultasModel;
class GaleriController extends BaseController
{
	protected $galeri;
	protected $fakultas;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->galeri=new GaleriModel;
		$this->fakultas=new FakultasModel;
	}
	public function index()
	{
		$data=$this->db->table('galeri')
			->select('galeri.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=galeri.id_jurusan')
			->get()->getResult('array');
		return view('/admin/jurusan/galeri/index',[
			'data' =>$data,
			'galeri'=>$this->galeri->findAll(),
		]);
	}
	public function galeri()
	{
		$ilkom=$this->db->table('galeri')
			->select('galeri.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=galeri.id_jurusan')
			->where('nama_fakultas="Ilmu Komputer"')
			->get()->getResult('array');
		$ekonomi=$this->db->table('galeri')
			->select('galeri.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=galeri.id_jurusan')
			->where('nama_fakultas="Ekonomi"')
			->get()->getResult('array');
		$sastra=$this->db->table('galeri')
			->select('galeri.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=galeri.id_jurusan')
			->where('nama_fakultas="Sastra"')
			->get()->getResult('array');
		$psikologi=$this->db->table('galeri')
			->select('galeri.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=galeri.id_jurusan')
			->where('nama_fakultas="Psikologi"')
			->get()->getResult('array');
		$teknik=$this->db->table('galeri')
			->select('galeri.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=galeri.id_jurusan')
			->where('nama_fakultas="Teknik"')
			->get()->getResult('array');
		return view('user/galeri',[
			'ilkom'=>$ilkom,
			'ekonomi' =>$ekonomi,
			'sastra'=>$sastra,
			'psikologi'=>$psikologi,
			'teknik'=>$teknik,
			'galeri'=>$this->galeri->findAll(),
		]);
	}

	public function create()
	{
		$fakultas=new FakultasModel();
		return view('/admin/jurusan/galeri/create',[
			'fakultas'=>$fakultas->findAll(),
		]);


		
	}

	public function save()
	{

		$fileSampul=$this->request->getFile('foto');
		$fileSampul->move('public/uploads');
		$namaFile=$fileSampul->getName();
		$this->galeri->save([
			'id_jurusan'=>$this->request->getVar('id_jurusan'),
			'kegiatan'=>$this->request->getVar('kegiatan'),
			'foto'=>$namaFile
		]);
		
		return redirect()->to('/galeri');

	}

	public function edit($id)
	{
		$fakultas = new FakultasModel();
		
		$dta=[
			'galeri'=>$this->galeri->find($id),
			'fakultas'=>$fakultas->findAll(),
			'validation'=> \Config\Services::validation(),
		];
		return view('/admin/jurusan/galeri/edit',$dta);
	}
	public function update($id)
	{
		$fotoLama = $this->galeri->getFoto($id);
		
		$fileSampul=$this->request->getFile('foto');
		if($fileSampul->getError()==4){
			$namaFile=$this->request->getVar('foto_lama');
		}else{
			$fileSampul->move('public/uploads');
			$namaFile=$fileSampul->getName();
			unlink('public/uploads/'.$this->request->getVar('foto_lama'));
		}
		$this->galeri->save([
			'id' => $id,
			'id_jurusan' =>$this->request->getVar('id_jurusan'),
			'kegiatan' =>$this->request->getVar('kegiatan'),
			'foto' =>$namaFile
		]);
		return redirect()->to('/galeri');
	}
	public function delete($id)
	{
		if ($this->request->getVar('_method')) {
			$this->galeri->delete($id);
		}
		return redirect()->to('/galeri');
	}
}
