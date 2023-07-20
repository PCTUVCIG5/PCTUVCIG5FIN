<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePharmacieRequest;
use App\Http\Requests\UpdatePharmacieRequest;
use App\Repositories\PharmacieRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PharmacieController extends AppBaseController
{
    /** @var PharmacieRepository $pharmacieRepository*/
    private $pharmacieRepository;

    public function __construct(PharmacieRepository $pharmacieRepo)
    {
        $this->pharmacieRepository = $pharmacieRepo;
    }

    /**
     * Display a listing of the Pharmacie.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pharmacies = $this->pharmacieRepository->all();

        return view('pharmacies.index')
            ->with('pharmacies', $pharmacies);
    }

    /**
     * Show the form for creating a new Pharmacie.
     *
     * @return Response
     */
    public function create()
    {
        return view('pharmacies.create');
    }

    /**
     * Store a newly created Pharmacie in storage.
     *
     * @param CreatePharmacieRequest $request
     *
     * @return Response
     */
    public function store(CreatePharmacieRequest $request)
    {
        $input = $request->all();

        $pharmacie = $this->pharmacieRepository->create($input);

        Flash::success('Pharmacie saved successfully.');

        return redirect(route('pharmacies.index'));
    }

    /**
     * Display the specified Pharmacie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pharmacie = $this->pharmacieRepository->find($id);

        if (empty($pharmacie)) {
            Flash::error('Pharmacie not found');

            return redirect(route('pharmacies.index'));
        }

        return view('pharmacies.show')->with('pharmacie', $pharmacie);
    }

    /**
     * Show the form for editing the specified Pharmacie.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pharmacie = $this->pharmacieRepository->find($id);

        if (empty($pharmacie)) {
            Flash::error('Pharmacie not found');

            return redirect(route('pharmacies.index'));
        }

        return view('pharmacies.edit')->with('pharmacie', $pharmacie);
    }

    /**
     * Update the specified Pharmacie in storage.
     *
     * @param int $id
     * @param UpdatePharmacieRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePharmacieRequest $request)
    {
        $pharmacie = $this->pharmacieRepository->find($id);

        if (empty($pharmacie)) {
            Flash::error('Pharmacie not found');

            return redirect(route('pharmacies.index'));
        }

        $pharmacie = $this->pharmacieRepository->update($request->all(), $id);

        Flash::success('Pharmacie updated successfully.');

        return redirect(route('pharmacies.index'));
    }

    /**
     * Remove the specified Pharmacie from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pharmacie = $this->pharmacieRepository->find($id);

        if (empty($pharmacie)) {
            Flash::error('Pharmacie not found');

            return redirect(route('pharmacies.index'));
        }

        $this->pharmacieRepository->delete($id);

        Flash::success('Pharmacie deleted successfully.');

        return redirect(route('pharmacies.index'));
    }
}
