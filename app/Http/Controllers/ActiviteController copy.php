<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActiviteRequest;
use App\Http\Requests\UpdateActiviteRequest;
use App\Repositories\ActiviteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ActiviteController extends AppBaseController
{
    /** @var ActiviteRepository $activiteRepository*/
    private $activiteRepository;

    public function __construct(ActiviteRepository $activiteRepo)
    {
        $this->activiteRepository = $activiteRepo;
    }

    /**
     * Display a listing of the Activite.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $activites = $this->activiteRepository->all();

        return view('activites.index')
            ->with('activites', $activites);
    }

    /**
     * Show the form for creating a new Activite.
     *
     * @return Response
     */
    public function create()
    {
        return view('activites.create');
    }

    /**
     * Store a newly created Activite in storage.
     *
     * @param CreateActiviteRequest $request
     *
     * @return Response
     */
    public function store(CreateActiviteRequest $request)
    {
        $input = $request->all();

        $activite = $this->activiteRepository->create($input);

        Flash::success('Activité enregistrée avec succès.');

        return redirect(route('activites.index'));
    }

    /**
     * Display the specified Activite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $activite = $this->activiteRepository->find($id);

        if (empty($activite)) {
            Flash::error('Activité introuvable');

            return redirect(route('activites.index'));
        }

        return view('activites.show')->with('activite', $activite);
    }

    /**
     * Show the form for editing the specified Activite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $activite = $this->activiteRepository->find($id);

        if (empty($activite)) {
            Flash::error('Activité introuvable');

            return redirect(route('activites.index'));
        }

        return view('activites.edit')->with('activite', $activite);
    }

    /**
     * Update the specified Activite in storage.
     *
     * @param int $id
     * @param UpdateActiviteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActiviteRequest $request)
    {
        $activite = $this->activiteRepository->find($id);

        if (empty($activite)) {
            Flash::error('Activité introuvable');

            return redirect(route('activites.index'));
        }

        $activite = $this->activiteRepository->update($request->all(), $id);

        Flash::success('Activité mise à jour avec succès.');

        return redirect(route('activites.index'));
    }

    /**
     * Remove the specified Activite from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $activite = $this->activiteRepository->find($id);

        if (empty($activite)) {
            Flash::error('Activité introuvable');

            return redirect(route('activites.index'));
        }

        $this->activiteRepository->delete($id);

        Flash::success('Activité supprimée avec succès.');

        return redirect(route('activites.index'));
    }

    public function addActivite(Request $request){
        $request->validate(
            [
                'nomActi'=>'required|unique:activites',   
                'typeActi'=>'required',
            ],
            [
                'nomActi.required'=>'Le nom est obligatoire',   
                'nomActi.unique'=>'Le nom existe deja',   
                'typeActi.required'=>'Le type est obligatoire', 
            ]
            );
    }
}
