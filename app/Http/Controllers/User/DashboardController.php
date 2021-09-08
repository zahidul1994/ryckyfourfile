<?php

namespace App\Http\Controllers\User;

use view;
use App\Models\Plan;
use App\Models\work;
use App\Models\Dowork;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('user.dashboard')->with('plan', $plan);
    }
    public function shopping()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('user.shopping')->with('plan', $plan);
    }
    
    public function youtube_click()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('user.youtube_click')->with('plan', $plan);
    }
    
    public function offer_list()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('user.offer_list')->with('plan', $plan);
    }
    public function new_membar()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('user.new_membar')->with('plan', $plan);
    }
     
    public function car_tre()
    {
        $plan=Dowork::orderBy('id','DESC')->get();
        return view('user.car_tre')->with('plan', $plan);
    }
     
     
    public function offer(Request $request){
        $offer=Plan::where('status',1)->first();
       return view('user.offer')->with('offer',$offer);
    }
    
    public function marketingplan(Request $request){
        $offer=Plan::where('status',1)->first();
       return view('user.plan')->with('offer',$offer);


    }

    public function renewplan(Request $request){
        $offer=Plan::where('status',1)->first();
       return view('user.renewplan')->with('offer',$offer);


    } 
    public function rank(Request $request){
        $offer=Plan::where('status',1)->first();
       return view('user.rank')->with('offer',$offer);


    }
      public function offer_details(Request $request){
        $offer=Plan::where('status',1)->first();
       return view('user.offer_details')->with('offer',$offer);


    }
     public function wallet(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.wallet')->with('wallet',$wallet);


    }
     public function withdraw(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.withdraw')->with('wallet',$wallet);


    }
    
    public function register_wallet(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.register_wallet')->with('wallet',$wallet);


    }
    
    public function sponsor(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.sponsor')->with('wallet',$wallet);


    }
    
      public function rankwallet(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.rankwallet')->with('wallet',$wallet);


    }
    
     public function youtube(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.youtube')->with('wallet',$wallet);


    }
  public function renew(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.renew')->with('wallet',$wallet);


    }
    public function carry(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.carry')->with('wallet',$wallet);


    }
    public function gen_wallet(Request $request){
        $wallet=Plan::where('status',1)->first();
       return view('user.gen_wallet')->with('wallet',$wallet);


    }



    
}
