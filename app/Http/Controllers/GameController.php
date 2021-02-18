<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class GameController extends Controller
{
	public function index($param)
	{
		 $params='<a href="https://www.educastudio.com/category/'.$param.'">'.$param.'</a>';
		 return $params;

	}
}