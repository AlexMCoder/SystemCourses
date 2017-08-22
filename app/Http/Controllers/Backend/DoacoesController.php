<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoacoesController extends Controller
{
    public function index(){
    	return view('doacoes.index');
    }
}
