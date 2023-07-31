<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use App\Models\Homme;
use App\Models\Naissance;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\HommeRepository;
use App\Http\Requests\CreateHommeRequest;

class PageController extends Controller
{
    //

    public function __construct(HommeRepository $hommeRepo)
    {
        $this->hommeRepository = $hommeRepo;
    }

    public function index()
    {
        // $naissances = Naissance::with('homme')->where('statutchef',1)->get();
        $naissances = Naissance::with('homme')->where('statutchef',1)->orderBy("id", "desc")->get();
        $hommes = Homme::with('naissances')->get();
        $femmes = Femme::with('naissances')->get();
                
                return view('acceuil', compact('naissances', 'hommes','femmes'));
      
    }

    public function liste_nouvelle_naissance()
    {
        // $naissances = Naissance::with('homme')->where('statutchef',1)->get();
        $naissances = Naissance::with('homme')->where('statutchef',1)->orderBy("id", "desc")->get();
        $hommes = Homme::with('naissances')->get();
        $femmes = Femme::with('naissances')->get();
                
                return view('www.liste_nouvelle_naissance', compact('naissances', 'hommes','femmes'));

    }

    public function declarationNaissance()
    {
        $naissances = Naissance::with('homme')->where('statutchef',1)->get();

        $hommes = DB::table('hommes')->get();
        $femmes = DB::table('femmes')->get();

    return view('www.naissances.index',compact('hommes','femmes','naissances'));
    }

    public function declarationNaissance_creer()
    {
        $hommes = DB::table('hommes')->get();
        $femmes = DB::table('femmes')->get();

    return view('www.naissances.create',compact('hommes','femmes'));
    }

    public function declarationNaissance_save(Request $request)
    {
       $request->validate([
           'nom_nais' => 'required',
           'prenoms_nais' => 'required',
           'dateNaissance_nais' => 'required',
           'lieuNaissance_nais' => 'required',
           'mode_nais' => 'required',
           'lieuHabitation_nais' => 'required',
           'homme_id' => 'required',
           'femme_id' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $naissance = new Naissance;
        $naissance->nom_nais = $request->nom_nais;
        $naissance->prenoms_nais = $request->prenoms_nais;
        $naissance->dateNaissance_nais = $request->dateNaissance_nais;
        $naissance->lieuNaissance_nais = $request->lieuNaissance_nais;
        $naissance->mode_nais = $request->mode_nais;
        $naissance->lieuHabitation_nais = $request->lieuHabitation_nais;
        $naissance->homme_id = $request->homme_id;
        $naissance->femme_id = $request->femme_id;
        $naissance->image = $path;
        $naissance->save();
     
        return redirect()->route('declarationNaissance')
                        ->with('success','naissances has been created successfully.');
    }

    public function registerPere(Request $request)
    {
       $request->validate([
           'nomHomm' => 'required',
           'prenHomm' => 'required',
           'dateNHomm' => 'required',
           'lieuNHomm' => 'required',
           'telHomm' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $hommes = new Homme;
        $hommes->nomHomm = $request->nomHomm;
        $hommes->prenHomm = $request->prenHomm;
        $hommes->dateNHomm = $request->dateNHomm;
        $hommes->lieuNHomm = $request->lieuNHomm;
        $hommes->telHomm = $request->telHomm;
        $hommes->image = $path;
        $hommes->save();
     
        return redirect()->route('declarationNaissance')
                        ->with('success','naissances has been created successfully.');
    }
    public function registerMere(Request $request)
    {
       $request->validate([
           'nomFemm' => 'required',
           'prenFemm' => 'required',
           'dateNFemm' => 'required',
           'lieuNFemm' => 'required',
           'telFemm' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $femmes = new Femme;
        $femmes->nomFemm = $request->nomFemm;
        $femmes->prenFemm = $request->prenFemm;
        $femmes->dateNFemm = $request->dateNFemm;
        $femmes->lieuNFemm = $request->lieuNFemm;
        $femmes->telFemm = $request->telFemm;
        $femmes->image = $path;
        $femmes->save();
     
        return redirect()->route('declarationNaissance')
                        ->with('success','naissances has been created successfully.');
    }

}

