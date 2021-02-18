<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class AboutController extends Controller
{
	public function about()
	{
		$nama = ' Sesha Dwi Lestari';
		$nim = '1941720173';
		return $nama.' '. $nim;
	}
		public function index()
	{
		 $param='<a href="https://www.educastudio.com/about-us/">About-us</a>';
		 return $param;

	}
}