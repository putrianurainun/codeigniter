<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Biodata extends BaseController
{
	public function index()
	{
		$data =[
		'title'=>'Biodata'
		];

		echo view("layouts/header",$data);
		echo "Nama Saya $nama </br>";
		echo "Umur Saya $umur";
		echo view("layouts/footer");

		return view("pages/biodata");
	}

	
}
