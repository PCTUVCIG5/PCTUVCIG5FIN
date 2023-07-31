<?php

namespace App\Http\Controllers\RESOURCE_HUMAINE;

use App\Http\Requests\CreateHommeRequest;
use App\Http\Requests\UpdateHommeRequest;
use App\Repositories\HommeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HommeController extends AppBaseController
{
    /** @var HommeRepository $hommeRepository*/
    private $hommeRepository;

    public function __construct(HommeRepository $hommeRepo)
    {
        $this->hommeRepository = $hommeRepo;
    }

    /**
     * Display a listing of the Homme.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hommes = $this->hommeRepository->all();

        return view('hommes.index')
            ->with('hommes', $hommes);
    }

    /**
     * Show the form for creating a new Homme.
     *
     * @return Response
     */
    public function create()
    {
        return view('hommes.create');
    }

    /**
     * Store a newly created Homme in storage.
     *
     * @param CreateHommeRequest $request
     *
     * @return Response
     */
    public function store(CreateHommeRequest $request)
    {
        $input = $request->all();

        $homme = $this->hommeRepository->create($input);

        Flash::success('Homme saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Homme.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $homme = $this->hommeRepository->find($id);

        if (empty($homme)) {
            Flash::error('Homme not found');

            return redirect(route('hommes.index'));
        }

        return view('hommes.show')->with('homme', $homme);
    }

    /**
     * Show the form for editing the specified Homme.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $homme = $this->hommeRepository->find($id);

        if (empty($homme)) {
            Flash::error('Homme not found');

            return redirect(route('hommes.index'));
        }

        return view('hommes.edit')->with('homme', $homme);
    }

    /**
     * Update the specified Homme in storage.
     *
     * @param int $id
     * @param UpdateHommeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHommeRequest $request)
    {
        $homme = $this->hommeRepository->find($id);

        if (empty($homme)) {
            Flash::error('Homme not found');

            return redirect(route('hommes.index'));
        }

        $homme = $this->hommeRepository->update($request->all(), $id);

        Flash::success('Homme updated successfully.');

        return redirect()->back();
    }

    /**
     * Remove the specified Homme from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $homme = $this->hommeRepository->find($id);

        if (empty($homme)) {
            Flash::error('Homme not found');

            return redirect(route('hommes.index'));
        }

        $this->hommeRepository->delete($id);

        Flash::success('Homme deleted successfully.');

        return redirect()->back();
    }
}
