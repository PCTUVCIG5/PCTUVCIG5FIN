<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeceRequest;
use App\Http\Requests\UpdateDeceRequest;
use App\Repositories\DeceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DeceController extends AppBaseController
{
    /** @var DeceRepository $deceRepository*/
    private $deceRepository;

    public function __construct(DeceRepository $deceRepo)
    {
        $this->deceRepository = $deceRepo;
    }

    /**
     * Display a listing of the Dece.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $deces = $this->deceRepository->all();

        return view('deces.index')
            ->with('deces', $deces);
    }

    /**
     * Show the form for creating a new Dece.
     *
     * @return Response
     */
    public function create()
    {
        return view('deces.create');
    }

    /**
     * Store a newly created Dece in storage.
     *
     * @param CreateDeceRequest $request
     *
     * @return Response
     */
    public function store(CreateDeceRequest $request)
    {
        $input = $request->all();

        $dece = $this->deceRepository->create($input);

        Flash::success('Dece saved successfully.');

        return redirect(route('deces.index'));
    }

    /**
     * Display the specified Dece.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dece = $this->deceRepository->find($id);

        if (empty($dece)) {
            Flash::error('Dece not found');

            return redirect(route('deces.index'));
        }

        return view('deces.show')->with('dece', $dece);
    }

    /**
     * Show the form for editing the specified Dece.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dece = $this->deceRepository->find($id);

        if (empty($dece)) {
            Flash::error('Dece not found');

            return redirect(route('deces.index'));
        }

        return view('deces.edit')->with('dece', $dece);
    }

    /**
     * Update the specified Dece in storage.
     *
     * @param int $id
     * @param UpdateDeceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeceRequest $request)
    {
        $dece = $this->deceRepository->find($id);

        if (empty($dece)) {
            Flash::error('Dece not found');

            return redirect(route('deces.index'));
        }

        $dece = $this->deceRepository->update($request->all(), $id);

        Flash::success('Dece updated successfully.');

        return redirect(route('deces.index'));
    }

    /**
     * Remove the specified Dece from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dece = $this->deceRepository->find($id);

        if (empty($dece)) {
            Flash::error('Dece not found');

            return redirect(route('deces.index'));
        }

        $this->deceRepository->delete($id);

        Flash::success('Dece deleted successfully.');

        return redirect(route('deces.index'));
    }
}
