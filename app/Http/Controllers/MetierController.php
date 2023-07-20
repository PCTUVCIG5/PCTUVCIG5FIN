<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMetierRequest;
use App\Http\Requests\UpdateMetierRequest;
use App\Repositories\MetierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MetierController extends AppBaseController
{
    /** @var MetierRepository $metierRepository*/
    private $metierRepository;

    public function __construct(MetierRepository $metierRepo)
    {
        $this->metierRepository = $metierRepo;
    }

    /**
     * Display a listing of the Metier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $metiers = $this->metierRepository->all();

        return view('metiers.index')
            ->with('metiers', $metiers);
    }

    /**
     * Show the form for creating a new Metier.
     *
     * @return Response
     */
    public function create()
    {
        return view('metiers.create');
    }

    /**
     * Store a newly created Metier in storage.
     *
     * @param CreateMetierRequest $request
     *
     * @return Response
     */
    public function store(CreateMetierRequest $request)
    {
        $input = $request->all();

        $metier = $this->metierRepository->create($input);

        Flash::success('Metier saved successfully.');

        return redirect(route('metiers.index'));
    }

    /**
     * Display the specified Metier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $metier = $this->metierRepository->find($id);

        if (empty($metier)) {
            Flash::error('Metier not found');

            return redirect(route('metiers.index'));
        }

        return view('metiers.show')->with('metier', $metier);
    }

    /**
     * Show the form for editing the specified Metier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $metier = $this->metierRepository->find($id);

        if (empty($metier)) {
            Flash::error('Metier not found');

            return redirect(route('metiers.index'));
        }

        return view('metiers.edit')->with('metier', $metier);
    }

    /**
     * Update the specified Metier in storage.
     *
     * @param int $id
     * @param UpdateMetierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMetierRequest $request)
    {
        $metier = $this->metierRepository->find($id);

        if (empty($metier)) {
            Flash::error('Metier not found');

            return redirect(route('metiers.index'));
        }

        $metier = $this->metierRepository->update($request->all(), $id);

        Flash::success('Metier updated successfully.');

        return redirect(route('metiers.index'));
    }

    /**
     * Remove the specified Metier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $metier = $this->metierRepository->find($id);

        if (empty($metier)) {
            Flash::error('Metier not found');

            return redirect(route('metiers.index'));
        }

        $this->metierRepository->delete($id);

        Flash::success('Metier deleted successfully.');

        return redirect(route('metiers.index'));
    }
}
