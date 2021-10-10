<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;

class Komik extends BaseController
{

	protected $komik;
	public function __construct()
	{
		$this->komik= new KomikModel;
	}

	public function index()
	{
		//$buku=$this->komik->findall();
		$data=[
			'title'=>'Daftar Komik',
			'komik'=>$this->komik->getKomik()
		];
		return view('komik/index',$data);
	}

	public function detail($slug){
		$komik= $this->komik->getKomik($slug);
		$data=[
			'title'=>'Daftar Komik',
			'komik'=>$this->komik->getKomik($slug)
		];
		return view('komik/detail',$data);
	}

	public function create(){
		$data=[
			'title'=>'Form Data Tambah Komik',
			'validation'=> \Config\Services::validation()
		];

		return view('komik/create', $data);
	}

	public function save(){

		//validasi input
		 if (!$this->validate([

		 	'judul'=>'required|is_unique[komik.judul]',
		// // 	'judul'=>[			
		// // 	'rules'=> 'required|is_unique|[komik.judul]',
		// // 	'errors'=>[
		// // 			'required'=>'{field} harus diisi.'
		// // 			'required'=>'{field} sudah terdaftar.'
		// // 	]
		// // ],
			'penulis' => 'required',
			'penerbit' => 'required',
			'sampul' => 'uploaded[sampul]|is_image[sampul]'
		])) {
		//	$validation = \Config\Services::validation();
			return redirect()->to('/Komik/create')->withInput();
		}

		$slug = url_title($this->request->getVar('judul'),'-', true);
		$fileSampul=$this->request->getFile('sampul');
		$fileSampul->move('image');
		$namaFile=$fileSampul->getName();
		$this->komik->save([
			'judul' =>$this->request->getVar('judul'),
			'slug' =>$slug,
			'penulis' =>$this->request->getVar('penulis'),
			'penerbit' =>$this->request->getVar('penerbit'),
			'sampul' =>$namaFile
		]);

		session()->setFlashdata('pesan','Data Berhasil Ditambahkan');
		return redirect()->to('/Komik')->withInput();
	}

	public function edit($id){
		$data=[
			'title'=>'Form Ubah Data Komik',
			'validation'=> \Config\Services::validation(),
			'komik'=>$this->komik->getKomik($id)
		];

		return view('komik/edit', $data);
	}

	public function update($id){

		$komikLama = $this->komik->getKomik($id);
		if ($komikLama['judul']==$this->request->getVar('judul')){

			$rule_judul = 'required';
		}else{
			$rule_judul = 'required|is_unique[komik.judul]';
		}

		if (!$this->validate([
			'judul'=> [
				'rules'=>$rule_judul,
				'errors'=>[
					'required'=>'{field}harus di isi',
					'is_unique'=>'{field}sudah terdaftar'
			]
		],
			'penulis' => 'required',
			'penerbit' => 'required',
			'sampul' => 'is_image[sampul]'
		])) {
			// $validation = \Config\Services::validation();
			return redirect()->to('/Komik/edit/'.$id)->withInput();
		}



		$slug = url_title($this->request->getVar('judul'),'-', true);
		$fileSampul=$this->request->getFile('sampul');
		if($fileSampul->getError()==4){
			$namaFile=$this->request->getVar('sampul_lama');
		}else{
			$fileSampul->move('image');
			$namaFile=$fileSampul->getName();
			unlink('image/'.$this->request->getVar('sampul_lama'));
		}
		$this->komik->save([
			'id' => $id,
			'judul' =>$this->request->getVar('judul'),
			'slug' =>$slug,
			'penulis' =>$this->request->getVar('penulis'),
			'penerbit' =>$this->request->getVar('penerbit'),
			'sampul' =>$namaFile
		]);

		session()->setFlashdata('pesan','Data Berhasil Diedit');
		return redirect()->to('/Komik');
	}


	public function delete($id){

		$this->komik->delete($id);

		return redirect()->to('/Komik');
	}
}
