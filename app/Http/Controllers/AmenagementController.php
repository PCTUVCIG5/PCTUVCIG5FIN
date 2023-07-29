<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Habitant;
use App\Models\Amenagement;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AmenagementRepository;
use App\Http\Requests\CreateAmenagementRequest;
use App\Http\Requests\UpdateAmenagementRequest;

class AmenagementController extends AppBaseController
{
    /** @var AmenagementRepository $amenagementRepository*/
    private $amenagementRepository;

    public function __construct(AmenagementRepository $amenagementRepo)
    {
        $this->amenagementRepository = $amenagementRepo;
    }

    /**
     * Display a listing of the Amenagement.
     *
     * @param Request $request
     *
     * @return Response
     */
    // public function index(Request $request)
    // {
    //     $amenagements = $this->amenagementRepository->all();

    //     return view('amenagements.index')
    //         ->with('amenagements', $amenagements);
    // }

    public function index()
    {
        $amenagements = Amenagement::with('habitant')->get();
        $habitants = Habitant::with('amenagements')->get();
        
        return view('amenagements.index', compact('amenagements', 'habitants'));
    }

    /**
     * Show the form for creating a new Amenagement.
     *
     * @return Response
     */
    public function create()
    {
        return view('amenagements.create');
    }

    /**
     * Store a newly created Amenagement in storage.
     *
     * @param CreateAmenagementRequest $request
     *
     * @return Response
     */
    public function store(CreateAmenagementRequest $request)
    {
        $input = $request->all();

        $amenagement = $this->amenagementRepository->create($input);

        Flash::success('Amenagement saved successfully.');

        return redirect(route('amenagements.index'));
    }

    /**
     * Display the specified Amenagement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $amenagement = $this->amenagementRepository->find($id);

        if (empty($amenagement)) {
            Flash::error('Amenagement not found');

            return redirect(route('amenagements.index'));
        }

        return view('amenagements.show')->with('amenagement', $amenagement);
    }

    /**
     * Show the form for editing the specified Amenagement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $amenagement = $this->amenagementRepository->find($id);

        if (empty($amenagement)) {
            Flash::error('Amenagement not found');

            return redirect(route('amenagements.index'));
        }

        return view('amenagements.edit')->with('amenagement', $amenagement);
    }

    /**
     * Update the specified Amenagement in storage.
     *
     * @param int $id
     * @param UpdateAmenagementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAmenagementRequest $request)
    {
        $amenagement = $this->amenagementRepository->find($id);

        if (empty($amenagement)) {
            Flash::error('Amenagement not found');

            return redirect(route('amenagements.index'));
        }

        $amenagement = $this->amenagementRepository->update($request->all(), $id);

        Flash::success('Amenagement updated successfully.');

        return redirect(route('amenagements.index'));
    }

    /**
     * Remove the specified Amenagement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $amenagement = $this->amenagementRepository->find($id);

        if (empty($amenagement)) {
            Flash::error('Amenagement not found');

            return redirect(route('amenagements.index'));
        }

        $this->amenagementRepository->delete($id);

        Flash::success('Amenagement deleted successfully.');

        return redirect(route('amenagements.index'));
    }
}
