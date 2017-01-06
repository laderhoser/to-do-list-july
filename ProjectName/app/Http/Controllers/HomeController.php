<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function index()
    {
    		$site_title = "This Title";
	return view('welcome', compact('site_title'));

    }
    public function about()
    {
    	$name = "Jose";
	$age = "32";
	$isCool = "yes";
	return view('about', compact('name', 'age', 'isCool'));

    }
}
