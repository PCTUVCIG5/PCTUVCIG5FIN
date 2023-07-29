<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFemmeRequest;
use App\Http\Requests\UpdateFemmeRequest;
use App\Repositories\FemmeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FemmeController extends AppBaseController
{
    /** @var FemmeRepository $femmeRepository*/
    private $femmeRepository;

    public function __construct(FemmeRepository $femmeRepo)
    {
        $this->femmeRepository = $femmeRepo;
    }

    /**
     * Display a listing of the Femme.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $femmes = $this->femmeRepository->all();

        return view('femmes.index')
            ->with('femmes', $femmes);
    }

    /**
     * Show the form for creating a new Femme.
     *
     * @return Response
     */
    public function create()
    {
        return view('femmes.create');
    }

    /**
     * Store a newly created Femme in storage.
     *
     * @param CreateFemmeRequest $request
     *
     * @return Response
     */
    public function store(CreateFemmeRequest $request)
    {
        $input = $request->all();

        $femme = $this->femmeRepository->create($input);

        Flash::success('Femme saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Femme.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $femme = $this->femmeRepository->find($id);

        if (empty($femme)) {
            Flash::error('Femme not found');

            return redirect(route('femmes.index'));
        }

        return view('femmes.show')->with('femme', $femme);
    }

    /**
     * Show the form for editing the specified Femme.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $femme = $this->femmeRepository->find($id);

        if (empty($femme)) {
            Flash::error('Femme not found');

            return redirect(route('femmes.index'));
        }

        return view('femmes.edit')->with('femme', $femme);
    }

    /**
     * Update the specified Femme in storage.
     *
     * @param int $id
     * @param UpdateFemmeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFemmeRequest $request)
    {
        $femme = $this->femmeRepository->find($id);

        if (empty($femme)) {
            Flash::error('Femme not found');

            return redirect(route('femmes.index'));
        }

        $femme = $this->femmeRepository->update($request->all(), $id);

        Flash::success('Femme updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified Femme from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $femme = $this->femmeRepository->find($id);

        if (empty($femme)) {
            Flash::error('Femme not found');

            return redirect(route('femmes.index'));
        }

        $this->femmeRepository->delete($id);

        Flash::success('Femme deleted successfully.');

        return redirect()->back();
    }
}
