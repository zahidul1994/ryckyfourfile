<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTabrles\Contacts\DataTable;
class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if (request()->ajax()) {
            return datatables()->of(Sponsor::latest())
              ->addColumn('action', function ($data) {
                $button ='<button type="button" id="editBtn" rid="' . $data->id . '" class="btn-sm btn-info" title="Update Sponsor"><i class="far fa-edit"></i></button>'; 
                $button .= '&nbsp;&nbsp;';
               
             $button .= '<button type="button" title="delete Sponsor"  id="deleteBtn" rid="' .$data->id . '" class="btn-sm"><i class="fas fa-trash"></i></button>';
                return $button;
              })
            
            ->addIndexColumn()
              ->rawColumns(['action'])
              ->make(true);
         
            }  
      
          return view('admin.sponsor.index');
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
             'reffer' => 'required|unique:sponsors',
              'bonus' => 'required|min:1',
    
            ]);
    
            if ($validator->fails()) {
                return response()->json
                (['success' =>false,
                 'errors'=>$validator->errors()->all()]);
            }
    
    else{
      
          $info= Sponsor::create($request->all());
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
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }
}
