<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Plan;
use App\Models\Dowork;
use App\Models\Work;
use App\Models\Slider;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $plan=DoWork::orderBy('id','DESC')->get();
        $slider=Slider::orderBy('id','DESC')->get();
        $work=Work::orderBy('id','DESC')->get();
        return view('welcome')->with('plan',$plan)->with('slider',$slider)->with('work',$work);
    }
}
