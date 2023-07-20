<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOffreEmploiRequest;
use App\Http\Requests\UpdateOffreEmploiRequest;
use App\Repositories\OffreEmploiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OffreEmploiController extends AppBaseController
{
    /** @var OffreEmploiRepository $offreEmploiRepository*/
    private $offreEmploiRepository;

    public function __construct(OffreEmploiRepository $offreEmploiRepo)
    {
        $this->offreEmploiRepository = $offreEmploiRepo;
    }

    /**
     * Display a listing of the OffreEmploi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $offreEmplois = $this->offreEmploiRepository->all();

        return view('offre_emplois.index')
            ->with('offreEmplois', $offreEmplois);
    }

    /**
     * Show the form for creating a new OffreEmploi.
     *
     * @return Response
     */
    public function create()
    {
        return view('offre_emplois.create');
    }

    /**
     * Store a newly created OffreEmploi in storage.
     *
     * @param CreateOffreEmploiRequest $request
     *
     * @return Response
     */
    public function store(CreateOffreEmploiRequest $request)
    {
        $input = $request->all();

        $offreEmploi = $this->offreEmploiRepository->create($input);

        Flash::success('Offre Emploi saved successfully.');

        return redirect(route('offreEmplois.index'));
    }

    /**
     * Display the specified OffreEmploi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offreEmploi = $this->offreEmploiRepository->find($id);

        if (empty($offreEmploi)) {
            Flash::error('Offre Emploi not found');

            return redirect(route('offreEmplois.index'));
        }

        return view('offre_emplois.show')->with('offreEmploi', $offreEmploi);
    }

    /**
     * Show the form for editing the specified OffreEmploi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offreEmploi = $this->offreEmploiRepository->find($id);

        if (empty($offreEmploi)) {
            Flash::error('Offre Emploi not found');

            return redirect(route('offreEmplois.index'));
        }

        return view('offre_emplois.edit')->with('offreEmploi', $offreEmploi);
    }

    /**
     * Update the specified OffreEmploi in storage.
     *
     * @param int $id
     * @param UpdateOffreEmploiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOffreEmploiRequest $request)
    {
        $offreEmploi = $this->offreEmploiRepository->find($id);

        if (empty($offreEmploi)) {
            Flash::error('Offre Emploi not found');

            return redirect(route('offreEmplois.index'));
        }

        $offreEmploi = $this->offreEmploiRepository->update($request->all(), $id);

        Flash::success('Offre Emploi updated successfully.');

        return redirect(route('offreEmplois.index'));
    }

    /**
     * Remove the specified OffreEmploi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offreEmploi = $this->offreEmploiRepository->find($id);

        if (empty($offreEmploi)) {
            Flash::error('Offre Emploi not found');

            return redirect(route('offreEmplois.index'));
        }

        $this->offreEmploiRepository->delete($id);

        Flash::success('Offre Emploi deleted successfully.');

        return redirect(route('offreEmplois.index'));
    }
}
