<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengabdianModel;
use App\Models\PenelitianModel;
use App\Models\KalenderModel;
use App\Models\BeasiswaModel;
class DepanController extends BaseController
{
	protected $pengabdian;
	protected $penelitian;
	protected $kalender;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->pengabdian=new PengabdianModel;
		$this->penelitian=new PenelitianModel;
		$this->kalender=new KalenderModel;
		$this->beasiswa=new BeasiswaModel();
	}
	public function index()
	{
		
		return view("/user/index");
	}

	public function pendiri()
	{
		return view("/user/pendiri");
	}
	public function rektor()
	{
		return view("/user/rektor");
	}
	public function visi()
	{
		return view("/user/visi");
	}
	public function profil()
	{
		return view("/user/profil");
	}
	public function organisasi()
	{
		return view("/user/organisasi");
	}
	public function kalender()
	{
		$genap=$this->db->table('kalender')
			->where('semester="Genap"')
			->get()->getResult('array');
		$ganjil=$this->db->table('kalender')
			->where('semester="Ganjil"')
			->get()->getResult('array');
		$pendek=$this->db->table('kalender')
			->where('semester="Pendek"')
			->get()->getResult('array');
		return view('/user/akademik/kalender',[
			'genap' =>$genap,
			'ganjil'=>$ganjil,
			'pendek'=>$pendek,
		]);
		
	}
	public function perkuliahan()
	{
		return view("/user/akademik/perkuliahan");
	}
	public function beasiswa()
	{
		$beasiswa=[
			'beasiswa'=>$this->beasiswa->getBeasiswa()
		];
		return view("/user/akademik/beasiswa",$beasiswa);
	}
	public function pmb()
	{
		return view("/user/akademik/pmb");
	}
	
	public function pengabdian()
	{

		$data=[
			'pengabdian'=>$this->pengabdian->getPengabdian()
		];
		return view('/user/lppm/pengabdian',$data);
	}

	public function penelitian()
	{
		
		$ilkom=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Ilmu Komputer"')
			->get()->getResult('array');
		$ekonomi=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Ekonomi"')
			->get()->getResult('array');
		$sastra=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Sastra"')
			->get()->getResult('array');
		$psikologi=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Psikologi"')
			->get()->getResult('array');
		$teknik=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Teknik"')
			->get()->getResult('array');
			return view('/user/lppm/penelitian',[
			'ilkom' =>$ilkom,
			'ekonomi'=>$ekonomi,
			'sastra'=>$sastra,
			'psikologi'=>$psikologi,
			'teknik'=>$teknik,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}

	public function profillppm(){
		return view('/user/lppm/profil');
	}
	public function informasi(){
		return view('/user/lppm/informasi');
	}
	public function artikel(){
		return view('/user/lppm/artikel');
	}
	public function profilspmi(){
		return view('/user/spmi/profil');
	}
	public function konten(){
		return view('/user/spmi/konten');
	}
	public function loker(){
		return view('/user/loker');
	}
}
