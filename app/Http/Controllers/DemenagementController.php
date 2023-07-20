<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDemenagementRequest;
use App\Http\Requests\UpdateDemenagementRequest;
use App\Repositories\DemenagementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DemenagementController extends AppBaseController
{
    /** @var DemenagementRepository $demenagementRepository*/
    private $demenagementRepository;

    public function __construct(DemenagementRepository $demenagementRepo)
    {
        $this->demenagementRepository = $demenagementRepo;
    }

    /**
     * Display a listing of the Demenagement.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $demenagements = $this->demenagementRepository->all();

        return view('demenagements.index')
            ->with('demenagements', $demenagements);
    }

    /**
     * Show the form for creating a new Demenagement.
     *
     * @return Response
     */
    public function create()
    {
        return view('demenagements.create');
    }

    /**
     * Store a newly created Demenagement in storage.
     *
     * @param CreateDemenagementRequest $request
     *
     * @return Response
     */
    public function store(CreateDemenagementRequest $request)
    {
        $input = $request->all();

        $demenagement = $this->demenagementRepository->create($input);

        Flash::success('Demenagement saved successfully.');

        return redirect(route('demenagements.index'));
    }

    /**
     * Display the specified Demenagement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $demenagement = $this->demenagementRepository->find($id);

        if (empty($demenagement)) {
            Flash::error('Demenagement not found');

            return redirect(route('demenagements.index'));
        }

        return view('demenagements.show')->with('demenagement', $demenagement);
    }

    /**
     * Show the form for editing the specified Demenagement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $demenagement = $this->demenagementRepository->find($id);

        if (empty($demenagement)) {
            Flash::error('Demenagement not found');

            return redirect(route('demenagements.index'));
        }

        return view('demenagements.edit')->with('demenagement', $demenagement);
    }

    /**
     * Update the specified Demenagement in storage.
     *
     * @param int $id
     * @param UpdateDemenagementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDemenagementRequest $request)
    {
        $demenagement = $this->demenagementRepository->find($id);

        if (empty($demenagement)) {
            Flash::error('Demenagement not found');

            return redirect(route('demenagements.index'));
        }

        $demenagement = $this->demenagementRepository->update($request->all(), $id);

        Flash::success('Demenagement updated successfully.');

        return redirect(route('demenagements.index'));
    }

    /**
     * Remove the specified Demenagement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $demenagement = $this->demenagementRepository->find($id);

        if (empty($demenagement)) {
            Flash::error('Demenagement not found');

            return redirect(route('demenagements.index'));
        }

        $this->demenagementRepository->delete($id);

        Flash::success('Demenagement deleted successfully.');

        return redirect(route('demenagements.index'));
    }
}
