<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Habitant;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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

        $this->middleware('permission:habitant-list|habitant-create|habitant-edit|habitant-delete', ['only' => ['index','store']]);
        $this->middleware('permission:habitant-create', ['only' => ['create','store']]);
        $this->middleware('permission:habitant-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:habitant-delete', ['only' => ['destroy']]);
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
        $habitants = $this->habitantRepository->all();

        $habitants = Habitant::paginate(10);
  
        return view('habitants.index', compact('habitants'));

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

     public function store(Request $request): RedirectResponse
     {
         $request->validate([
             'nomHabi' => 'required',
             'prenHabi' => 'required',
             'dateNHabi' => 'required',
             'lieuNHabi' => 'required',
             'sexeHabi' => 'required',
             'telHabi' => 'required',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
     
         $input = $request->all();
     
         if ($image = $request->file('image')) {
             $destinationPath = 'images/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $input['image'] = "$profileImage";
         }
       
         Habitant::create($input);
        
         return redirect()->route('habitants.index')
                         ->with('success','Product created successfully.');
     }


    // public function store(CreateHabitantRequest $request)
    // {
    //     $input = $request->all();

    //     $habitant = $this->habitantRepository->create($input);

    //     Flash::success('Habitant saved successfully.');

    //     return redirect(route('habitants.index'));
    // }

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
            Flash::error('Habitant introuvable');

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
    // public function update($id, UpdateHabitantRequest $request)
    // {
    //     $habitant = $this->habitantRepository->find($id);

    //     if (empty($habitant)) {
    //         Flash::error('Habitant not found');

    //         return redirect(route('habitants.index'));
    //     }

    //     $habitant = $this->habitantRepository->update($request->all(), $id);

    //     Flash::success('Habitant updated successfully.');

    //     return redirect(route('habitants.index'));
    // }

    public function update(Request $request, Habitant $habitant): RedirectResponse
    {
        $request->validate([
            'nomHabi' => 'required',
            'prenHabi' => 'required',
            'dateNHabi' => 'required',
            'lieuNHabi' => 'required',
            'sexeHabi' => 'required',
            'telHabi' => 'required'
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
            
        $habitant->update($input);
      
        return redirect()->route('habitants.index')
                        ->with('success','habitants mis à jour avec succès');
    }
  
    /**
     * Remove the specified resource from storage.
     */

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
            Flash::error('Habitant introuvable');

            return redirect(route('habitants.index'));
        }

        $this->habitantRepository->delete($id);

        Flash::success('Habitant supprimé avec succès.');

        return redirect(route('habitants.index'));
    }
}
