<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Dowork;
use App\Models\work;
use App\Models\Slider;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('admin.plan')->with('plan', $plan);
    }
    public function work()
    {
        $plan=work::orderBy('id','DESC')->get();
        return view('admin.work')->with('plan', $plan);
    }
    public function slider()
    {
        $plan=Slider::orderBy('id','DESC')->get();
        return view('admin.slider')->with('plan', $plan);
    }
    public function plan_create(Request $request){
        $do=new Dowork;
        $do->title=$request->title;
        $do->des=$request->des;
        $file=$request->file('logo');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/plan/', $name);
        $do->logo=$name;
        $do->save();
        return back();


    }
    public function work_create(Request $request){
        $do=new work;       
        $file=$request->file('image');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/work/', $name);
        $do->image=$name;
        $do->save();
        return back();

    }
    public function slider_create(Request $request){
        $do=new Slider;
        
        $file=$request->file('image');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/slider/', $name);
        $do->image=$name;
        $do->save();
        return back();

    }
    public function offer(Request $request){
        $plan=Plan::where('status',1)->first();
        $file=$request->file('offer');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/plan/', $name);
        $plan->offer=$name;
        $plan->save();
        return back();


    }
    public function marketing(Request $request){
        $plan=Plan::where('status',1)->first();
        $file=$request->file('markating');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/plan/', $name);
        $plan->markating=$name;
        $plan->save();
        return back();
         

    }
    public function renew(Request $request){
        $plan=Plan::where('status',1)->first();
        $file=$request->file('renu');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/plan/', $name);
        $plan->renu=$name;
        $plan->save();
        return back();
         

    }
    public function rank(Request $request){
        $plan=Plan::where('status',1)->first();
        $file=$request->file('rank');
        $name = rand(90000, 999999) .'.'.$file->extension(); 
        $file->move(public_path().'/assets/images/plan/', $name);
        $plan->rank=$name;
        $plan->save();
        return back();
         

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
