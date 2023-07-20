<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMariageRequest;
use App\Http\Requests\UpdateMariageRequest;
use App\Repositories\MariageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MariageController extends AppBaseController
{
    /** @var MariageRepository $mariageRepository*/
    private $mariageRepository;

    public function __construct(MariageRepository $mariageRepo)
    {
        $this->mariageRepository = $mariageRepo;
    }

    /**
     * Display a listing of the Mariage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mariages = $this->mariageRepository->all();

        return view('mariages.index')
            ->with('mariages', $mariages);
    }

    /**
     * Show the form for creating a new Mariage.
     *
     * @return Response
     */
    public function create()
    {
        return view('mariages.create');
    }

    /**
     * Store a newly created Mariage in storage.
     *
     * @param CreateMariageRequest $request
     *
     * @return Response
     */
    public function store(CreateMariageRequest $request)
    {
        $input = $request->all();

        $mariage = $this->mariageRepository->create($input);

        Flash::success('Mariage saved successfully.');

        return redirect(route('mariages.index'));
    }

    /**
     * Display the specified Mariage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mariage = $this->mariageRepository->find($id);

        if (empty($mariage)) {
            Flash::error('Mariage not found');

            return redirect(route('mariages.index'));
        }

        return view('mariages.show')->with('mariage', $mariage);
    }

    /**
     * Show the form for editing the specified Mariage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mariage = $this->mariageRepository->find($id);

        if (empty($mariage)) {
            Flash::error('Mariage not found');

            return redirect(route('mariages.index'));
        }

        return view('mariages.edit')->with('mariage', $mariage);
    }

    /**
     * Update the specified Mariage in storage.
     *
     * @param int $id
     * @param UpdateMariageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMariageRequest $request)
    {
        $mariage = $this->mariageRepository->find($id);

        if (empty($mariage)) {
            Flash::error('Mariage not found');

            return redirect(route('mariages.index'));
        }

        $mariage = $this->mariageRepository->update($request->all(), $id);

        Flash::success('Mariage updated successfully.');

        return redirect(route('mariages.index'));
    }

    /**
     * Remove the specified Mariage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mariage = $this->mariageRepository->find($id);

        if (empty($mariage)) {
            Flash::error('Mariage not found');

            return redirect(route('mariages.index'));
        }

        $this->mariageRepository->delete($id);

        Flash::success('Mariage deleted successfully.');

        return redirect(route('mariages.index'));
    }
}
