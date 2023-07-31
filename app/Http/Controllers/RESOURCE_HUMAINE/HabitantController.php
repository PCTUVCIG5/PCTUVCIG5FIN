<?php

namespace App\Http\Controllers\RESOURCE_HUMAINE;

use Flash;
use Response;
use App\Models\Habitant;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Repositories\HabitantRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateHabitantRequest;
use App\Http\Requests\Habitant\StoreRequest;
use App\Http\Requests\UpdateHabitantRequest;
use App\Http\Requests\Habitant\UpdateRequest;

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

     public function store(StoreRequest $request): RedirectResponse
     {
         $validated = $request->validated();
 
         if ($request->hasFile('image')) {
             // put image in the public storage
             $filePath = Storage::disk('public')->put('images/habitants/habitant-images', request()->file('image'));

             $validated['image'] = $filePath;
         }
 
         // insert only requests that already validated in the StoreRequest
         $create = Habitant::create($validated);
 
         if($create) {
             // add flash for the success notification
             session()->flash('notif.success', 'Post created successfully!');
             return redirect()->route('habitants.index');
         }
 
         return abort(500);
     }

    //  public function store(Request $request)
    //  {
    //     $request->validate([
    //         'nomHabi' => 'required',
    //         'prenHabi' => 'required',
    //         'dateNHabi' => 'required',
    //         'lieuNHabi' => 'required',
    //         'sexeHabi' => 'required',
    //         'telHabi' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //      ]);
    //      $path = $request->file('image')->store('public/images');
    //      $habitant = new Habitant;
    //      $habitant->nomHabi = $request->nomHabi;
    //      $habitant->prenHabi = $request->prenHabi;
    //      $habitant->dateNHabi = $request->dateNHabi;
    //      $habitant->lieuNHabi = $request->lieuNHabi;
    //      $habitant->sexeHabi = $request->sexeHabi;
    //      $habitant->telHabi = $request->telHabi;
    //      $habitant->image = $path;
    //      $habitant->save();
      
    //      return redirect()->route('habitants.index')
    //                      ->with('success','Post has been created successfully.');
    //  }
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
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $habitant = Habitant::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($habitant->image);

            $filePath = Storage::disk('public')->put('images/habitants/habitant-images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $habitant->update($validated);

        if($update) {
            session()->flash('notif.success', 'Post updated successfully!');
            return redirect()->route('habitants.index');
        }

        return abort(500);
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

    public function multipleusersdelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $user) 
		{
			Habitant::where('id', $user)->delete();
		}
		return redirect();
	}


}
