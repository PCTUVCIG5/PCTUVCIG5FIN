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

        $this->middleware('permission:liste|creer|supprimer|modifier', ['only' => ['index','store']]);
        $this->middleware('permission:creer', ['only' => ['create','store']]);
        $this->middleware('permission:modifier', ['only' => ['edit','update']]);
        $this->middleware('permission:supprimer', ['only' => ['destroy']]);
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
        $habitants = Habitant::orderBy('id','DESC')->paginate(5);
        return view('habitants.index',compact('habitants'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
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

     public function store(Request $request)
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
         $path = $request->file('image')->store('public/images');
         $habitant = new Habitant;
         $habitant->nomHabi = $request->nomHabi;
         $habitant->prenHabi = $request->prenHabi;
         $habitant->dateNHabi = $request->dateNHabi;
         $habitant->lieuNHabi = $request->lieuNHabi;
         $habitant->sexeHabi = $request->sexeHabi;
         $habitant->telHabi = $request->telHabi;
         $habitant->image = $path;
         $habitant->save();
      
         return redirect()->route('habitants.index')
                         ->with('success','Post has been created successfully.');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomHabi' => 'required',
            'prenHabi' => 'required',
            'dateNHabi' => 'required',
            'lieuNHabi' => 'required',
            'sexeHabi' => 'required',
            'telHabi' => 'required',
        ]);
        
        $habitant = Habitant::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $habitant->image = $path;
        }
        $habitant->nomHabi = $request->nomHabi;
        $habitant->prenHabi = $request->prenHabi;
        $habitant->dateNHabi = $request->dateNHabi;
        $habitant->lieuNHabi = $request->lieuNHabi;
        $habitant->sexeHabi = $request->sexeHabi;
        $habitant->telHabi = $request->telHabi;
        $habitant->save();
    
        return redirect()->route('habitants.index')
                        ->with('success','Post updated successfully');
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
