<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NewsController extends Controller
{
	public function index($param)
	{
		 $params='<a href="https://www.educastudio.com/news/'.$param.'"> NEWS '.$param.'</a>';
		 return $params;

	}
}