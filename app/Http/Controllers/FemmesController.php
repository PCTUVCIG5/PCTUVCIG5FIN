<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFemmesRequest;
use App\Http\Requests\UpdateFemmesRequest;
use App\Repositories\FemmesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FemmesController extends AppBaseController
{
    /** @var FemmesRepository $femmesRepository*/
    private $femmesRepository;

    public function __construct(FemmesRepository $femmesRepo)
    {
        $this->femmesRepository = $femmesRepo;
    }

    /**
     * Display a listing of the Femmes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $femmes = $this->femmesRepository->all();

        return view('femmes.index')
            ->with('femmes', $femmes);
    }

    /**
     * Show the form for creating a new Femmes.
     *
     * @return Response
     */
    public function create()
    {
        return view('femmes.create');
    }

    /**
     * Store a newly created Femmes in storage.
     *
     * @param CreateFemmesRequest $request
     *
     * @return Response
     */
    public function store(CreateFemmesRequest $request)
    {
        $input = $request->all();

        $femmes = $this->femmesRepository->create($input);

        Flash::success('Femmes saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Femmes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $femmes = $this->femmesRepository->find($id);

        if (empty($femmes)) {
            Flash::error('Femmes not found');

            return redirect(route('femmes.index'));
        }

        return view('femmes.show')->with('femmes', $femmes);
    }

    /**
     * Show the form for editing the specified Femmes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $femmes = $this->femmesRepository->find($id);

        if (empty($femmes)) {
            Flash::error('Femmes not found');

            return redirect(route('femmes.index'));
        }

        return view('femmes.edit')->with('femmes', $femmes);
    }

    /**
     * Update the specified Femmes in storage.
     *
     * @param int $id
     * @param UpdateFemmesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFemmesRequest $request)
    {
        $femmes = $this->femmesRepository->find($id);

        if (empty($femmes)) {
            Flash::error('Femmes not found');

            return redirect(route('femmes.index'));
        }

        $femmes = $this->femmesRepository->update($request->all(), $id);

        Flash::success('Femmes updated successfully.');

        return redirect()->back();
    }

    /**
     * Remove the specified Femmes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $femmes = $this->femmesRepository->find($id);

        if (empty($femmes)) {
            Flash::error('Femmes not found');

            return redirect(route('femmes.index'));
        }

        $this->femmesRepository->delete($id);

        Flash::success('Femmes deleted successfully.');

        return redirect()->back();
    }
}
