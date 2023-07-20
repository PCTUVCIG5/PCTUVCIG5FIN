<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDemandeEmploiRequest;
use App\Http\Requests\UpdateDemandeEmploiRequest;
use App\Repositories\DemandeEmploiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DemandeEmploiController extends AppBaseController
{
    /** @var DemandeEmploiRepository $demandeEmploiRepository*/
    private $demandeEmploiRepository;

    public function __construct(DemandeEmploiRepository $demandeEmploiRepo)
    {
        $this->demandeEmploiRepository = $demandeEmploiRepo;
    }

    /**
     * Display a listing of the DemandeEmploi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $demandeEmplois = $this->demandeEmploiRepository->all();

        return view('demande_emplois.index')
            ->with('demandeEmplois', $demandeEmplois);
    }

    /**
     * Show the form for creating a new DemandeEmploi.
     *
     * @return Response
     */
    public function create()
    {
        return view('demande_emplois.create');
    }

    /**
     * Store a newly created DemandeEmploi in storage.
     *
     * @param CreateDemandeEmploiRequest $request
     *
     * @return Response
     */
    public function store(CreateDemandeEmploiRequest $request)
    {
        $input = $request->all();

        $demandeEmploi = $this->demandeEmploiRepository->create($input);

        Flash::success('Demande Emploi saved successfully.');

        return redirect(route('demandeEmplois.index'));
    }

    /**
     * Display the specified DemandeEmploi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $demandeEmploi = $this->demandeEmploiRepository->find($id);

        if (empty($demandeEmploi)) {
            Flash::error('Demande Emploi not found');

            return redirect(route('demandeEmplois.index'));
        }

        return view('demande_emplois.show')->with('demandeEmploi', $demandeEmploi);
    }

    /**
     * Show the form for editing the specified DemandeEmploi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $demandeEmploi = $this->demandeEmploiRepository->find($id);

        if (empty($demandeEmploi)) {
            Flash::error('Demande Emploi not found');

            return redirect(route('demandeEmplois.index'));
        }

        return view('demande_emplois.edit')->with('demandeEmploi', $demandeEmploi);
    }

    /**
     * Update the specified DemandeEmploi in storage.
     *
     * @param int $id
     * @param UpdateDemandeEmploiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDemandeEmploiRequest $request)
    {
        $demandeEmploi = $this->demandeEmploiRepository->find($id);

        if (empty($demandeEmploi)) {
            Flash::error('Demande Emploi not found');

            return redirect(route('demandeEmplois.index'));
        }

        $demandeEmploi = $this->demandeEmploiRepository->update($request->all(), $id);

        Flash::success('Demande Emploi updated successfully.');

        return redirect(route('demandeEmplois.index'));
    }

    /**
     * Remove the specified DemandeEmploi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $demandeEmploi = $this->demandeEmploiRepository->find($id);

        if (empty($demandeEmploi)) {
            Flash::error('Demande Emploi not found');

            return redirect(route('demandeEmplois.index'));
        }

        $this->demandeEmploiRepository->delete($id);

        Flash::success('Demande Emploi deleted successfully.');

        return redirect(route('demandeEmplois.index'));
    }
}
