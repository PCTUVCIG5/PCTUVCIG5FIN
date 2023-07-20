<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDivoceRequest;
use App\Http\Requests\UpdateDivoceRequest;
use App\Repositories\DivoceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DivoceController extends AppBaseController
{
    /** @var DivoceRepository $divoceRepository*/
    private $divoceRepository;

    public function __construct(DivoceRepository $divoceRepo)
    {
        $this->divoceRepository = $divoceRepo;
    }

    /**
     * Display a listing of the Divoce.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $divoces = $this->divoceRepository->all();

        return view('divoces.index')
            ->with('divoces', $divoces);
    }

    /**
     * Show the form for creating a new Divoce.
     *
     * @return Response
     */
    public function create()
    {
        return view('divoces.create');
    }

    /**
     * Store a newly created Divoce in storage.
     *
     * @param CreateDivoceRequest $request
     *
     * @return Response
     */
    public function store(CreateDivoceRequest $request)
    {
        $input = $request->all();

        $divoce = $this->divoceRepository->create($input);

        Flash::success('Divoce saved successfully.');

        return redirect(route('divoces.index'));
    }

    /**
     * Display the specified Divoce.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $divoce = $this->divoceRepository->find($id);

        if (empty($divoce)) {
            Flash::error('Divoce not found');

            return redirect(route('divoces.index'));
        }

        return view('divoces.show')->with('divoce', $divoce);
    }

    /**
     * Show the form for editing the specified Divoce.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $divoce = $this->divoceRepository->find($id);

        if (empty($divoce)) {
            Flash::error('Divoce not found');

            return redirect(route('divoces.index'));
        }

        return view('divoces.edit')->with('divoce', $divoce);
    }

    /**
     * Update the specified Divoce in storage.
     *
     * @param int $id
     * @param UpdateDivoceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDivoceRequest $request)
    {
        $divoce = $this->divoceRepository->find($id);

        if (empty($divoce)) {
            Flash::error('Divoce not found');

            return redirect(route('divoces.index'));
        }

        $divoce = $this->divoceRepository->update($request->all(), $id);

        Flash::success('Divoce updated successfully.');

        return redirect(route('divoces.index'));
    }

    /**
     * Remove the specified Divoce from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $divoce = $this->divoceRepository->find($id);

        if (empty($divoce)) {
            Flash::error('Divoce not found');

            return redirect(route('divoces.index'));
        }

        $this->divoceRepository->delete($id);

        Flash::success('Divoce deleted successfully.');

        return redirect(route('divoces.index'));
    }
}
