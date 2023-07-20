<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefMetierRequest;
use App\Http\Requests\UpdateRefMetierRequest;
use App\Repositories\RefMetierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RefMetierController extends AppBaseController
{
    /** @var RefMetierRepository $refMetierRepository*/
    private $refMetierRepository;

    public function __construct(RefMetierRepository $refMetierRepo)
    {
        $this->refMetierRepository = $refMetierRepo;
    }

    /**
     * Display a listing of the RefMetier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $refMetiers = $this->refMetierRepository->all();

        return view('ref_metiers.index')
            ->with('refMetiers', $refMetiers);
    }

    /**
     * Show the form for creating a new RefMetier.
     *
     * @return Response
     */
    public function create()
    {
        return view('ref_metiers.create');
    }

    /**
     * Store a newly created RefMetier in storage.
     *
     * @param CreateRefMetierRequest $request
     *
     * @return Response
     */
    public function store(CreateRefMetierRequest $request)
    {
        $input = $request->all();

        $refMetier = $this->refMetierRepository->create($input);

        Flash::success('Ref Metier saved successfully.');

        return redirect(route('refMetiers.index'));
    }

    /**
     * Display the specified RefMetier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refMetier = $this->refMetierRepository->find($id);

        if (empty($refMetier)) {
            Flash::error('Ref Metier not found');

            return redirect(route('refMetiers.index'));
        }

        return view('ref_metiers.show')->with('refMetier', $refMetier);
    }

    /**
     * Show the form for editing the specified RefMetier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refMetier = $this->refMetierRepository->find($id);

        if (empty($refMetier)) {
            Flash::error('Ref Metier not found');

            return redirect(route('refMetiers.index'));
        }

        return view('ref_metiers.edit')->with('refMetier', $refMetier);
    }

    /**
     * Update the specified RefMetier in storage.
     *
     * @param int $id
     * @param UpdateRefMetierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefMetierRequest $request)
    {
        $refMetier = $this->refMetierRepository->find($id);

        if (empty($refMetier)) {
            Flash::error('Ref Metier not found');

            return redirect(route('refMetiers.index'));
        }

        $refMetier = $this->refMetierRepository->update($request->all(), $id);

        Flash::success('Ref Metier updated successfully.');

        return redirect(route('refMetiers.index'));
    }

    /**
     * Remove the specified RefMetier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refMetier = $this->refMetierRepository->find($id);

        if (empty($refMetier)) {
            Flash::error('Ref Metier not found');

            return redirect(route('refMetiers.index'));
        }

        $this->refMetierRepository->delete($id);

        Flash::success('Ref Metier deleted successfully.');

        return redirect(route('refMetiers.index'));
    }
}
