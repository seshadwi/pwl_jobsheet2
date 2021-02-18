<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProgramController extends Controller
{
	public function index($param)
	{
		 $params='<a href="https://www.educastudio.com/program/'.$param.'"> Program '.$param.'</a>';
		 return $params;

	}
}