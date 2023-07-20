<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCentreSanteRequest;
use App\Http\Requests\UpdateCentreSanteRequest;
use App\Repositories\CentreSanteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CentreSanteController extends AppBaseController
{
    /** @var CentreSanteRepository $centreSanteRepository*/
    private $centreSanteRepository;

    public function __construct(CentreSanteRepository $centreSanteRepo)
    {
        $this->centreSanteRepository = $centreSanteRepo;
    }

    /**
     * Display a listing of the CentreSante.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $centreSantes = $this->centreSanteRepository->all();

        return view('centre_santes.index')
            ->with('centreSantes', $centreSantes);
    }

    /**
     * Show the form for creating a new CentreSante.
     *
     * @return Response
     */
    public function create()
    {
        return view('centre_santes.create');
    }

    /**
     * Store a newly created CentreSante in storage.
     *
     * @param CreateCentreSanteRequest $request
     *
     * @return Response
     */
    public function store(CreateCentreSanteRequest $request)
    {
        $input = $request->all();

        $centreSante = $this->centreSanteRepository->create($input);

        Flash::success('Centre Sante saved successfully.');

        return redirect(route('centreSantes.index'));
    }

    /**
     * Display the specified CentreSante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $centreSante = $this->centreSanteRepository->find($id);

        if (empty($centreSante)) {
            Flash::error('Centre Sante not found');

            return redirect(route('centreSantes.index'));
        }

        return view('centre_santes.show')->with('centreSante', $centreSante);
    }

    /**
     * Show the form for editing the specified CentreSante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $centreSante = $this->centreSanteRepository->find($id);

        if (empty($centreSante)) {
            Flash::error('Centre Sante not found');

            return redirect(route('centreSantes.index'));
        }

        return view('centre_santes.edit')->with('centreSante', $centreSante);
    }

    /**
     * Update the specified CentreSante in storage.
     *
     * @param int $id
     * @param UpdateCentreSanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCentreSanteRequest $request)
    {
        $centreSante = $this->centreSanteRepository->find($id);

        if (empty($centreSante)) {
            Flash::error('Centre Sante not found');

            return redirect(route('centreSantes.index'));
        }

        $centreSante = $this->centreSanteRepository->update($request->all(), $id);

        Flash::success('Centre Sante updated successfully.');

        return redirect(route('centreSantes.index'));
    }

    /**
     * Remove the specified CentreSante from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $centreSante = $this->centreSanteRepository->find($id);

        if (empty($centreSante)) {
            Flash::error('Centre Sante not found');

            return redirect(route('centreSantes.index'));
        }

        $this->centreSanteRepository->delete($id);

        Flash::success('Centre Sante deleted successfully.');

        return redirect(route('centreSantes.index'));
    }
}
