<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNaissanceRequest;
use App\Http\Requests\UpdateNaissanceRequest;
use App\Repositories\NaissanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NaissanceController extends AppBaseController
{
    /** @var NaissanceRepository $naissanceRepository*/
    private $naissanceRepository;

    public function __construct(NaissanceRepository $naissanceRepo)
    {
        $this->naissanceRepository = $naissanceRepo;
    }

    /**
     * Display a listing of the Naissance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $naissances = $this->naissanceRepository->all();

        return view('naissances.index')
            ->with('naissances', $naissances);
    }

    /**
     * Show the form for creating a new Naissance.
     *
     * @return Response
     */
    public function create()
    {
        return view('naissances.create');
    }

    /**
     * Store a newly created Naissance in storage.
     *
     * @param CreateNaissanceRequest $request
     *
     * @return Response
     */
    public function store(CreateNaissanceRequest $request)
    {
        $input = $request->all();

        $naissance = $this->naissanceRepository->create($input);

        Flash::success('Naissance saved successfully.');

        return redirect(route('naissances.index'));
    }

    /**
     * Display the specified Naissance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $naissance = $this->naissanceRepository->find($id);

        if (empty($naissance)) {
            Flash::error('Naissance not found');

            return redirect(route('naissances.index'));
        }

        return view('naissances.show')->with('naissance', $naissance);
    }

    /**
     * Show the form for editing the specified Naissance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $naissance = $this->naissanceRepository->find($id);

        if (empty($naissance)) {
            Flash::error('Naissance not found');

            return redirect(route('naissances.index'));
        }

        return view('naissances.edit')->with('naissance', $naissance);
    }

    /**
     * Update the specified Naissance in storage.
     *
     * @param int $id
     * @param UpdateNaissanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNaissanceRequest $request)
    {
        $naissance = $this->naissanceRepository->find($id);

        if (empty($naissance)) {
            Flash::error('Naissance not found');

            return redirect(route('naissances.index'));
        }

        $naissance = $this->naissanceRepository->update($request->all(), $id);

        Flash::success('Naissance updated successfully.');

        return redirect(route('naissances.index'));
    }

    /**
     * Remove the specified Naissance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $naissance = $this->naissanceRepository->find($id);

        if (empty($naissance)) {
            Flash::error('Naissance not found');

            return redirect(route('naissances.index'));
        }

        $this->naissanceRepository->delete($id);

        Flash::success('Naissance deleted successfully.');

        return redirect(route('naissances.index'));
    }
}
