<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Habitant;
use Illuminate\Http\Request;
use App\Repositories\HabitantRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateHabitantRequest;
use App\Http\Requests\UpdateHabitantRequest;

class HabitantController extends AppBaseController
{
    /** @var HabitantRepository $habitantRepository*/
    private $habitantRepository;

    public function __construct(HabitantRepository $habitantRepo)
    {
        $this->habitantRepository = $habitantRepo;
    }

    /**
     * Display a listing of the Habitant.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $habitants = Habitant::paginate(10); 
  
        return view('habitants.index', compact('habitants'));

        // $habitants = $this->habitantRepository->all();
        // return view('habitants.index')
        //     ->with('habitants', $habitants);
    }

    /**
     * Show the form for creating a new Habitant.
     *
     * @return Response
     */
    public function create()
    {
        return view('habitants.create');
    }

    /**
     * Store a newly created Habitant in storage.
     *
     * @param CreateHabitantRequest $request
     *
     * @return Response
     */
    public function store(CreateHabitantRequest $request)
    {
        $input = $request->all();

        $habitant = $this->habitantRepository->create($input);

        Flash::success('Habitant saved successfully.');

        return redirect(route('habitants.index'));
    }

    /**
     * Display the specified Habitant.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $habitant = $this->habitantRepository->find($id);

        if (empty($habitant)) {
            Flash::error('Habitant not found');

            return redirect(route('habitants.index'));
        }

        return view('habitants.show')->with('habitant', $habitant);
    }

    /**
     * Show the form for editing the specified Habitant.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $habitant = $this->habitantRepository->find($id);

        if (empty($habitant)) {
            Flash::error('Habitant not found');

            return redirect(route('habitants.index'));
        }

        return view('habitants.edit')->with('habitant', $habitant);
    }

    /**
     * Update the specified Habitant in storage.
     *
     * @param int $id
     * @param UpdateHabitantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHabitantRequest $request)
    {
        $habitant = $this->habitantRepository->find($id);

        if (empty($habitant)) {
            Flash::error('Habitant not found');

            return redirect(route('habitants.index'));
        }

        $habitant = $this->habitantRepository->update($request->all(), $id);

        Flash::success('Habitant updated successfully.');

        return redirect(route('habitants.index'));
    }

    /**
     * Remove the specified Habitant from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $habitant = $this->habitantRepository->find($id);

        if (empty($habitant)) {
            Flash::error('Habitant not found');

            return redirect(route('habitants.index'));
        }

        $this->habitantRepository->delete($id);

        Flash::success('Habitant deleted successfully.');

        return redirect(route('habitants.index'));
    }
}
