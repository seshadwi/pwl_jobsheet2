<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class PageController extends Controller
{
	public function index()
	{
		return 'selamat datang';
	}

	public function about()
	{
		$nama = 'Sesha Dwi Lestari';
		$nim = '1941720173';
		return $nama.' '. $nim;
	}

	public function articles($id)
	{
		return "Halaman artikel dengan id ".$id;
	}
}