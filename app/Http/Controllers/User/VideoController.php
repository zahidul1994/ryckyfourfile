<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Video;
use App\Models\Videocount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->ytstatus==1){
        $check=Wallet::whereuser_id(Auth::id())->wheremoneyinout('youtube')->whereDate('created_at', Carbon::today())->first();
        if(!$check){
            Wallet::create(array(
                'view' => 0,
                'moneyinout' =>'youtube',
               'amount' => 0.02,
               'user_id' => Auth::id(),
            
                    ));
            $video=Video::wherestatus(2)->inRandomOrder()->first();
            return view('user.video.view')->with('info',$video);
        }
        if($check->view<6){
           
            $video=Video::wherestatus(2)->inRandomOrder()->first();
            return view('user.video.view')->with('info',$video);
        }
        else{
            $videoearn=Wallet::whereuser_id(Auth::id())->wheremoneyinout('youtube')->sum('moneyinout');
            dd($videoearn);
            if($videoearn<40){
                User::whereuser_id(Auth::id())->first()->update(array('utstatus'=>0));
            }
            return view('user.video.index')->with('earn', $videoearn);
        }
    }else{
        $videoearn=Wallet::whereuser_id(Auth::id())->wheremoneyinout('youtube')->sum('moneyinout');
        return view('user.video.index')->with('earn', $videoearn);
    }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
        $video = Wallet::whereuser_id(Auth::id())->wheremoneyinout('youtube')->whereDate('created_at', Carbon::today())->first();
        $video->view += 1;
        $video->amount +=0.02;
        $video->save();           
        if($video){
            return response()->json(['success' => 'success'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
     
        return view('admin.video.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //dd($request);
        $video->update($request->all());
        return Redirect::to('admin/video'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return Redirect::to('admin/video'); 
    }
}
