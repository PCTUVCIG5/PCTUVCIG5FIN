<?php
           
namespace App\Http\Controllers;
            
use App\Models\Activite;
use Illuminate\Http\Request;
use DataTables;
          
class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        if ($request->ajax()) {
  
            $data = Activite::latest()->get();
  
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editActivite">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteActivite">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('activites.index');
    }
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Activite::updateOrCreate([
                    'id' => $request->product_id
                ],
                [
                    'name' => $request->name, 
                    'detail' => $request->detail
                ]);        
     
        return response()->json(['success'=>'Activite saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activite = Activite::find($id);
        return response()->json($activite);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Activite::find($id)->delete();
      
        return response()->json(['success'=>'Activite deleted successfully.']);
    }
}