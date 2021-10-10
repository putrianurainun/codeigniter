<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use App\Models\JurusanModel;
use App\Models\PenelitianModel;
use App\Models\FakultasModel;
use App\Models\MatkulModel;
class JurusandepanController extends BaseController
{
	protected $dosen;
	protected $jurusan;
	protected $matkul;
	function __construct()
	{
		$this->db=\Config\Database::connect();
		$this->dosen=new DosenModel;
		$this->jurusan=new JurusanModel;
		$this->penelitian=new PenelitianModel;
		$this->matkul=new MatkulModel;
	}
	public function index()
	{
		//
	}

	public function jurusan()
	{	
	
		$data=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="S1 Teknik Informatika"')
			->get()->getResult('array');
		$datami=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		$teliti=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Ilmu Komputer"')
			->get()->getResult('array');
		$sem1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester','1')
			->get()->getResult('array');
		$sem2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="2"')
			->get()->getResult('array');
		$sem3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="3"')
			->get()->getResult('array');
		$sem4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="4"')
			->get()->getResult('array');
		$sem5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="5"')
			->get()->getResult('array');
		$sem6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="6"')
			->get()->getResult('array');
		$sem7=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="7"')
			->get()->getResult('array');
		$sem8=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('nama_jurusan','S1 Teknik Informatika')
			->where('semester="8"')
			->get()->getResult('array');
		$semi1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		$semi2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		$semi3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		$semi4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		$semi5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		$semi6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"')
			->where('nama_jurusan="D3 Manajemen Informatika"')
			->get()->getResult('array');
		return view('/user/fakultas/ilkom',[
			'data' =>$data,
			'datami'=>$datami,
			'sem1'=>$sem1,
			'sem2'=>$sem2,
			'sem3'=>$sem3,
			'sem4'=>$sem4,
			'sem5'=>$sem5,
			'sem6'=>$sem6,
			'sem7'=>$sem7,
			'sem8'=>$sem8,
			'semi1'=>$semi1,
			'semi2'=>$semi2,
			'semi3'=>$semi3,
			'semi4'=>$semi4,
			'semi5'=>$semi5,
			'semi6'=>$semi6,
			'dosen'=>$this->dosen->getDosen(),
			'data_fakultas' =>$teliti,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}

	public function ekonomi()
	{	
	
		$data=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$datama=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$teliti=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Ekonomi"')
			->get()->getResult('array');
		$sem1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem7=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="7"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$sem8=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="8"' )
			->where('nama_jurusan="S1 Akuntansi"')
			->get()->getResult('array');
		$semi1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi7=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="7"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		$semi8=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="8"')
			->where('nama_jurusan="S1 Manajemen"')
			->get()->getResult('array');
		return view('/user/fakultas/ekonomi',[
			'data' =>$data,
			'datama'=>$datama,
			'sem1'=>$sem1,
			'sem2'=>$sem2,
			'sem3'=>$sem3,
			'sem4'=>$sem4,
			'sem5'=>$sem5,
			'sem6'=>$sem6,
			'sem7'=>$sem7,
			'sem8'=>$sem8,
			'semi1'=>$semi1,
			'semi2'=>$semi2,
			'semi3'=>$semi3,
			'semi4'=>$semi4,
			'semi5'=>$semi5,
			'semi6'=>$semi6,
			'semi7'=>$semi7,
			'semi8'=>$semi8,
			'dosen'=>$this->dosen->getDosen(),
			'data_fakultas' =>$teliti,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}

	public function psikologi()
	{	
	
		$data=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="S1 Psikologi"')
			->get()->getResult('array');
		$teliti=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Psikologi"')
			->get()->getResult('array');
		$sem1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem7=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="7"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		$sem8=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="8"')
			->where('nama_jurusan="S1 Psikolog"')
			->get()->getResult('array');
		return view('/user/fakultas/psikologi',[
			'data' =>$data,
			'sem1'=>$sem1,
			'sem2'=>$sem2,
			'sem3'=>$sem3,
			'sem4'=>$sem4,
			'sem5'=>$sem5,
			'sem6'=>$sem6,
			'sem7'=>$sem7,
			'sem8'=>$sem8,
			'dosen'=>$this->dosen->getDosen(),
			'data_fakultas' =>$teliti,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}

	public function sastra()
	{	
	
		$data=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$dataing=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$sem1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem7=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="7"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$sem8=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="8"')
			->where('nama_jurusan="S1 Sastra Jepang"')
			->get()->getResult('array');
		$semi1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"' )
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$semi2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"' )
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$semi3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"' )
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$semi4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"' )
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$semi5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"' )
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$semi6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"' )
			->where('nama_jurusan="D3 Bahasa Inggris"')
			->get()->getResult('array');
		$teliti=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Sastra"')
			->get()->getResult('array');
		return view('/user/fakultas/sastra',[
			'data' =>$data,
			'dataing'=>$dataing,
			'sem1'=>$sem1,
			'sem2'=>$sem2,
			'sem3'=>$sem3,
			'sem4'=>$sem4,
			'sem5'=>$sem5,
			'sem6'=>$sem6,
			'sem7'=>$sem7,
			'sem8'=>$sem8,
			'semi1'=>$semi1,
			'semi2'=>$semi2,
			'semi3'=>$semi3,
			'semi4'=>$semi4,
			'semi5'=>$semi5,
			'semi6'=>$semi6,
			'dosen'=>$this->dosen->getDosen(),
			'data_fakultas' =>$teliti,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}

	public function teknik()
	{	
	
		$data=$this->db->table('dosen')
			->select('dosen.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=dosen.id_jurusan')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$teliti=$this->db->table('penelitian')
			->select('penelitian.*, fakultas.nama_fakultas')
			->join('fakultas','fakultas.id=penelitian.id_jurusan')
			->where('nama_fakultas="Teknik"')
			->get()->getResult('array');
		$sem1=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="1"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem2=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="2"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem3=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="3"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem4=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="4"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem5=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="5"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem6=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="6"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem7=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="7"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		$sem8=$this->db->table('matkul')
			->select('matkul.*, jurusans.nama_jurusan')
			->join('jurusans','jurusans.id=matkul.id_jurusan')
			->where('semester="8"')
			->where('nama_jurusan="S1 Teknik Industri"')
			->get()->getResult('array');
		
		return view('/user/fakultas/teknik',[
			'data' =>$data,
			'sem1'=>$sem1,
			'sem2'=>$sem2,
			'sem3'=>$sem3,
			'sem4'=>$sem4,
			'sem5'=>$sem5,
			'sem6'=>$sem6,
			'sem7'=>$sem7,
			'sem8'=>$sem8,
			'dosen'=>$this->dosen->getDosen(),
			'data_fakultas' =>$teliti,
			'penelitian'=>$this->penelitian->findAll(),
		]);
	}

	

}
