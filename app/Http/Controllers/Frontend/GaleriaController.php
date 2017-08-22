<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\AppBaseController;
use App\Models\Galeria;
use Flash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class GaleriaController extends Controller {

	/**
	 * Display a listing of the Curso.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index() {
		return view('galeria');
	}
}
