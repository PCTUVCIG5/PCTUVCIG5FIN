<?php

namespace App\Http\Controllers\RESOURCE_HUMAINE;

use Flash;
use Response;
use App\Models\Habitant;
use App\Models\Amenagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
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
    public function index(Request $request)
    {

        $amenagements = Amenagement::with('habitant')->where('type',1)->get();
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
        $habitants = Habitant::orderBy('id','DESC')->paginate(5);

        return view('amenagements.create',compact('habitants'));
    }

    /**
     * Store a newly created Amenagement in storage.
     *
     * @param CreateAmenagementRequest $request
     *
     * @return Response
     */
    // public function store(CreateAmenagementRequest $request)
    // {
    //     $input = $request->all();

    //     $amenagement = $this->amenagementRepository->create($input);

    //     Flash::success('Amenagement saved successfully.');

    //     return redirect(route('amenagements.index'));

    // }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'dateAme' => 'required',
            'Qtier' => 'required',
            'descriptionAmen' => 'required',
            'habitant_id' => 'required|unique:amenagements,habitant_id',
        ]);
    
        $input = $request->all();
        $amenagement = Amenagement::create($input);
    
        return redirect()->route('amenagements.index')
                        ->with('success','Amenagement saved successfully');
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

    public function changeStatusAmenagement($id){
        $getStatus = Amenagement::select('type')->where('id',$id)->first();
        if($getStatus->type==1){
            $type = 0;
        }else{
            $type = 1;
        }
        Amenagement::where('id',$id)->update(['type'=>$type]);
        return redirect()->back();
    }


    public function amenagement()
    {
        return view('amenagements.amenagement');
    }

    public function amenagement_store(Request $request)
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
     
        return redirect()->route('amenagements.create')
                        ->with('success','Post has been created successfully.');
    }
}
