<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateprofessorUserRequest;
use App\Http\Requests\UpdateprofessorUserRequest;
use App\Repositories\professorUserRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class professorUserController extends AppBaseController {
	/** @var  professorUserRepository */
	private $professorUserRepository;

	public function __construct(professorUserRepository $professorUserRepo) {
		$this->professorUserRepository = $professorUserRepo;
	}

	/**
	 * Display a listing of the professorUser.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index(Request $request) {
		$this->professorUserRepository->pushCriteria(new RequestCriteria($request));
		$professorUsers = $this->professorUserRepository->all();

		return view('backend.professor_users.index')
			->with('professorUsers', $professorUsers);
	}

	/**
	 * Show the form for creating a new professorUser.
	 *
	 * @return Response
	 */
	public function create() {
		return view('backend.professor_users.create');
	}

	/**
	 * Store a newly created professorUser in storage.
	 *
	 * @param CreateprofessorUserRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateprofessorUserRequest $request) {
		$request->merge(['password' => bcrypt($request->password)]);
		$input = $request->all();

		$professorUser = $this->professorUserRepository->create($input);

		Flash::success('Professor saved successfully.');

		return redirect(route('professorUsers.index'));
	}

	/**
	 * Display the specified professorUser.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id) {
		$professorUser = $this->professorUserRepository->findWithoutFail($id);

		if (empty($professorUser)) {
			Flash::error('Professor User not found');

			return redirect(route('professorUsers.index'));
		}

		return view('backend.professor_users.show')->with('professorUser', $professorUser);
	}

	/**
	 * Show the form for editing the specified professorUser.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id) {
		$professorUser = $this->professorUserRepository->findWithoutFail($id);

		if (empty($professorUser)) {
			Flash::error('Professor User not found');

			return redirect(route('professorUsers.index'));
		}

		return view('backend.professor_users.edit')->with('professorUser', $professorUser);
	}

	/**
	 * Update the specified professorUser in storage.
	 *
	 * @param  int              $id
	 * @param UpdateprofessorUserRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateprofessorUserRequest $request) {
		$professorUser = $this->professorUserRepository->findWithoutFail($id);

		if (empty($professorUser)) {
			Flash::error('Professor User not found');

			return redirect(route('professorUsers.index'));
		}
		$request->merge(['password' => bcrypt($request->password)]);
		$professorUser = $this->professorUserRepository->update($request->all(), $id);

		Flash::success('Professor User updated successfully.');

		return redirect(route('professorUsers.index'));
	}

	/**
	 * Remove the specified professorUser from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id) {
		$professorUser = $this->professorUserRepository->findWithoutFail($id);

		if (empty($professorUser)) {
			Flash::error('Professor User not found');

			return redirect(route('professorUsers.index'));
		}

		$this->professorUserRepository->delete($id);

		Flash::success('Professor User deleted successfully.');

		return redirect(route('professorUsers.index'));
	}
}
