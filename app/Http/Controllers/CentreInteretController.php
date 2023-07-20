<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCentreInteretRequest;
use App\Http\Requests\UpdateCentreInteretRequest;
use App\Repositories\CentreInteretRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CentreInteretController extends AppBaseController
{
    /** @var CentreInteretRepository $centreInteretRepository*/
    private $centreInteretRepository;

    public function __construct(CentreInteretRepository $centreInteretRepo)
    {
        $this->centreInteretRepository = $centreInteretRepo;
    }

    /**
     * Display a listing of the CentreInteret.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $centreInterets = $this->centreInteretRepository->all();

        return view('centre_interets.index')
            ->with('centreInterets', $centreInterets);
    }

    /**
     * Show the form for creating a new CentreInteret.
     *
     * @return Response
     */
    public function create()
    {
        return view('centre_interets.create');
    }

    /**
     * Store a newly created CentreInteret in storage.
     *
     * @param CreateCentreInteretRequest $request
     *
     * @return Response
     */
    public function store(CreateCentreInteretRequest $request)
    {
        $input = $request->all();

        $centreInteret = $this->centreInteretRepository->create($input);

        Flash::success('Centre Interet saved successfully.');

        return redirect(route('centreInterets.index'));
    }

    /**
     * Display the specified CentreInteret.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $centreInteret = $this->centreInteretRepository->find($id);

        if (empty($centreInteret)) {
            Flash::error('Centre Interet not found');

            return redirect(route('centreInterets.index'));
        }

        return view('centre_interets.show')->with('centreInteret', $centreInteret);
    }

    /**
     * Show the form for editing the specified CentreInteret.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $centreInteret = $this->centreInteretRepository->find($id);

        if (empty($centreInteret)) {
            Flash::error('Centre Interet not found');

            return redirect(route('centreInterets.index'));
        }

        return view('centre_interets.edit')->with('centreInteret', $centreInteret);
    }

    /**
     * Update the specified CentreInteret in storage.
     *
     * @param int $id
     * @param UpdateCentreInteretRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCentreInteretRequest $request)
    {
        $centreInteret = $this->centreInteretRepository->find($id);

        if (empty($centreInteret)) {
            Flash::error('Centre Interet not found');

            return redirect(route('centreInterets.index'));
        }

        $centreInteret = $this->centreInteretRepository->update($request->all(), $id);

        Flash::success('Centre Interet updated successfully.');

        return redirect(route('centreInterets.index'));
    }

    /**
     * Remove the specified CentreInteret from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $centreInteret = $this->centreInteretRepository->find($id);

        if (empty($centreInteret)) {
            Flash::error('Centre Interet not found');

            return redirect(route('centreInterets.index'));
        }

        $this->centreInteretRepository->delete($id);

        Flash::success('Centre Interet deleted successfully.');

        return redirect(route('centreInterets.index'));
    }
}
