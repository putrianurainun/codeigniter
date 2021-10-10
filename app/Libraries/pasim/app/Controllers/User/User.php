<?php

namespace App\Controllers\user;
use App\Controllers\BaseController;

class User extends BaseController
{
	public function index()
	{
		
	return view("/user/index");
	}

	public function pendiri()
	{
		
	return view("user/pendiri");
	}


	public function about()
	{
		$data=['title'=> 'about'
		];
		return view("pages/about",$data);
		
	}
	public function contact()
	{
		$data=['title'=> 'contact'
		];
		return view("pages/contact",$data);	
	}
}