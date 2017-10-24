<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateContatoRequest;
use App\Http\Requests\UpdateContatoRequest;
use App\Models\Contato;
use App\Repositories\ContatoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class ContatoController extends AppBaseController {
	/** @var  ContatoRepository */
	private $contatoRepository;

	public function __construct(ContatoRepository $contatoRepo) {
		$this->contatoRepository = $contatoRepo;
	}

	/**
	 * Display a listing of the Contato.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index(Request $request) {
		$this->contatoRepository->pushCriteria(new RequestCriteria($request));
		$contatos = $this->contatoRepository->all();

		return view('backend.contatos.index')
			->with('contatos', $contatos);
	}

	/**
	 * Display the specified Contato.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id) {
		$contato = $this->contatoRepository->findWithoutFail($id);

		if (empty($contato)) {
			Flash::error('Contato não encontrado');

			return redirect(route('backend.contatos.index'));
		}

		return view('backend.contatos.show')->with('contato', $contato);
	}

	/**
	 * Remove the specified Contato from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id) {
		$contato = $this->contatoRepository->findWithoutFail($id);

		if (empty($contato)) {
			Flash::error('Contato não encontrado');

			return redirect(route('contatos.index'));
		}

		$this->contatoRepository->delete($id);

		Flash::success('Contato deletado com sucesso');

		return redirect(route('contatos.index'));
	}
}
