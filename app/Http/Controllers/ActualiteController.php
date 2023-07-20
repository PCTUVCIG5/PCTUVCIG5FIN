<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Repositories\ActualiteRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateActualiteRequest;
use App\Http\Requests\UpdateActualiteRequest;

class ActualiteController extends AppBaseController
{
    /** @var ActualiteRepository $actualiteRepository*/
    private $actualiteRepository;

    public function __construct(ActualiteRepository $actualiteRepo)
    {
        $this->actualiteRepository = $actualiteRepo;
    }

    /**
     * Display a listing of the Actualite.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $actualites = $this->actualiteRepository->all();

        return view('actualites.index')
            ->with('actualites', $actualites);
    }

    /**
     * Show the form for creating a new Actualite.
     *
     * @return Response
     */
    public function create()
    {
        return view('actualites.create');
    }

    /**
     * Store a newly created Actualite in storage.
     *
     * @param CreateActualiteRequest $request
     *
     * @return Response
     */


     public function store(Request $request): RedirectResponse
     {
         $request->validate([
             'description' => 'required',
             'typeActu' => 'required',
             'statutActu' => 'required',
             'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
     
         $input = $request->all();
     
         if ($image = $request->file('image1','image2','image3')) {
             $destinationPath = 'images/';
             $profileImage1 = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $profileImage2 = date('mYdHis') . "." . $image->getClientOriginalExtension();
             $profileImage3 = date('mdYHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage1);
             $image->move($destinationPath, $profileImage2);
             $image->move($destinationPath, $profileImage3);
             $input['image1'] = "$profileImage1";
             $input['image2'] = "$profileImage2";
             $input['image3'] = "$profileImage3";
         }
       
         Actualite::create($input);
        
         return redirect()->route('actualites.index')
                         ->with('success','Product created successfully.');
     }


    // public function store(CreateActualiteRequest $request)
    // {
    //     $input = $request->all();

    //     $actualite = $this->actualiteRepository->create($input);

    //     Flash::success('Actualite saved successfully.');

    //     return redirect(route('actualites.index'));
    // }

    /**
     * Display the specified Actualite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('actualites.index'));
        }

        return view('actualites.show')->with('actualite', $actualite);
    }

    /**
     * Show the form for editing the specified Actualite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('actualites.index'));
        }

        return view('actualites.edit')->with('actualite', $actualite);
    }

    /**
     * Update the specified Actualite in storage.
     *
     * @param int $id
     * @param UpdateActualiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActualiteRequest $request)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('actualites.index'));
        }

        $actualite = $this->actualiteRepository->update($request->all(), $id);

        Flash::success('Actualite updated successfully.');

        return redirect(route('actualites.index'));
    }

    /**
     * Remove the specified Actualite from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actualite = $this->actualiteRepository->find($id);

        if (empty($actualite)) {
            Flash::error('Actualite not found');

            return redirect(route('actualites.index'));
        }

        $this->actualiteRepository->delete($id);

        Flash::success('Actualite deleted successfully.');

        return redirect(route('actualites.index'));
    }
}
