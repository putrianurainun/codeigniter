<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
	public function index()
	{
		$data =[
			'title'=>'Home'
		];

		return view('pages/home', $data);
		
	}

	public function about()
	{
		$data =[
			'title'=>'About'
		];

		return view('pages/about', $data);
	}

	public function contact()
	{
		$data =[
			'title'=>'Contact'
		];

		return view('pages/contact', $data);
	}
}
