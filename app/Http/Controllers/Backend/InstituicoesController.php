<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstituicoesController extends Controller
{
    public function index(){
    	return view('instituicoes.index');
    }
}
