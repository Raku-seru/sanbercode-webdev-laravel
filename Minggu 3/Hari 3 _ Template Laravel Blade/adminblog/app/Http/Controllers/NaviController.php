<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaviController extends Controller
{
    public function master() {
    	return view('master');
    }

  	public function table() {
    	return view('table');
    }

    public function datatable() {
    	return view('datatable');
    }
}
