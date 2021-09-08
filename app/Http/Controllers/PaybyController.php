<?php

namespace App\Http\Controllers;
use App\Models\Payby;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Contracts\DataTable;

class PaybyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (request()->ajax()) {
            return datatables()->of(Payby::with('admin')->latest())
              ->addColumn('action', function ($data) {
                $button ='<button type="button" id="editBtn" rid="' . $data->id . '" class="btn-sm btn-info" title="Update Payby"><i class="far fa-edit"></i></button>'; 
                $button .= '&nbsp;&nbsp;';
               
             $button .= '<button type="button" title="delete Payby"  id="deleteBtn" rid="' .$data->id . '" class="btn-sm"><i class="fas fa-trash"></i></button>';
                return $button;
              })
              ->addColumn('admin', function($data){
                return $data->admin->name;
            })
            ->addIndexColumn()
              ->rawColumns(['action','admin'])
              ->make(true);
         
            }  
      
          return view('admin.payby.index');
        
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
             'payby' => 'required|unique:paybies',
              'note' => 'required|min:1',
    
            ]);
    
            if ($validator->fails()) {
                return response()->json
                (['success' =>false,
                 'errors'=>$validator->errors()->all()]);
            }
    
    else{
      
          $info= Payby::create($request->all()+['admin_id'=>Auth::id()]);
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
     * @param  \App\Models\Payby  $payby
     * @return \Illuminate\Http\Response
     */
    public function show(Payby $payby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payby  $payby
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Payby::find($id);

        return response()->json($info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payby  $payby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'payby' => 'required|unique:paybies,payby,'.$id,
   
           ]);
   
           if ($validator->fails()) {
               return response()->json
               (['success' =>false,
                'errors'=>$validator->errors()->all()]);
           }
   
   else{
     
         $info= Payby::find($id)->update($request->all()+['admin_id'=>Auth::id()]);
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
     * @param  \App\Models\Payby  $payby
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Payby::findOrFail($id)->delete();

        return response()->json($info);
    }
}