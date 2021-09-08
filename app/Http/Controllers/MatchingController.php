<?php

namespace App\Http\Controllers;

use App\Models\Matching;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Contracts\DataTable;

class MatchingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (request()->ajax()) {
            return datatables()->of(Matching::with('admin')->latest())
              ->addColumn('action', function ($data) {
                $button ='<button type="button" id="editBtn" rid="' . $data->id . '" class="btn-sm btn-info" title="Update Matching"><i class="far fa-edit"></i></button>'; 
                $button .= '&nbsp;&nbsp;';
               
             $button .= '<button type="button" title="delete Matching"  id="deleteBtn" rid="' .$data->id . '" class="btn-sm"><i class="fas fa-trash"></i></button>';
                return $button;
              })
              ->addColumn('admin', function($data){
                return $data->admin->name;
            })
            ->addIndexColumn()
              ->rawColumns(['action','admin'])
              ->make(true);
         
            }  
      
          return view('user.matching.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
             'matchingname' => 'required|unique:matchings',
             'matchingbonus' => 'required|min:1',
    
            ]);
    
            if ($validator->fails()) {
                return response()->json
                (['success' =>false,
                 'errors'=>$validator->errors()->all()]);
            }
    
    else{
      
          $info= Matching::create($request->all()+['admin_id'=>Auth::id()]);
           if ($info) {
                
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matching  $matching
     * @return \Illuminate\Http\Response
     */
    public function show(Matching $matching)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matching  $matching
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
         $info = Matching::find($id);

        return response()->json($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matching  $matching
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $validator = Validator::make($request->all(), [
            'matchingname' => 'required|unique:matchings,matchingname,'.$id,
   
           ]);
   
           if ($validator->fails()) {
               return response()->json
               (['success' =>false,
                'errors'=>$validator->errors()->all()]);
           }
   
   else{
     
         $info= Matching::find($id)->update($request->all()+['admin_id'=>Auth::id()]);
          if ($info) {
               
               return response()->json(['success' => true]);
           } else {
               return response()->json(['success' => false]);
           }
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matching  $matching
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         $info = Matching::findOrFail($id)->delete();

        return response()->json($info);
    }
}
