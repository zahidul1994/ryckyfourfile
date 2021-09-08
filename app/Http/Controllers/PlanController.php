<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Dowork;
use App\Models\Work;
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
        $plan=Dowork::firstOrCreate(
            ['admin_id' => Auth::guard('admin')->user()->id],
            ['newcustomermessage' => 'Welcom to #CUSTOMER_NAME#, Your  ID #CUSTOMER_ID#.Your Monthly Bill #RATE# TK .Thanks To billing.com',
            'billingmessage' => ' প্রিয় #CUSTOMER_NAME# আপনার লাইন #EXPIRY_DATE# তারিখে মেয়াদউত্তীর্ণ হবে। অনুগ্রহ করে আপনার বিল পরিশোধ করুন। বিকাশ। 017.... . Ref ID #CUSTOMER_ID#',
            'paymentmessage' => 'Dear User, We have received #AMOUNT#Tk for #CUSTOMER_ID#. Your account will be active until #EXPIRY_DATE#  also Due #DUE#. Visit: portal.maxim-billing.com',
            'openticketmessage' => 'Ticket#  #TKTNO#. Complain: #TOPIC#. #USERNAME#, #MOBILE#, Addr= #ADDRESS#, details:  #DETAIL#, mobile no #MOBILE#',
            'assignticketmessage' => ' Ticket#  #TKTNO#. Complain: #TOPIC#. #USERNAME#, #MOBILE#, Addr= #ADDRESS#, details:  #DETAIL#',
            'updateticketmessage' => 'Ticket # #TKTNO# Update:  topic #TOPIC#. #TKT_MSG#',
            'closeticketmessage' => ' Ticket # #TKTNO# closed:  topic #TOPIC#. #TKT_MSG#',
            'problemmessage' => 'Dear Custoer  #name# Our ..... Line '
          
          ],
     
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
     public function edit($id)
    {
         $plan = Dowork::find($id);

        if( !is_null($plan) )
        {
           return view('admin.pedit')->with('plan', $plan);
        }
       else
        {
            return redirect()->back('');
        }
    }
      // Work Edit
   public function wedit($id)
    {
         $work = Work::find($id);

        if( !is_null($work) )
        {
           return view('admin.wedit')->with('work', $work);
        }
       else
        {
            return redirect()->back('');
        }
    }
     // Slider Edit
  public function sedit($id)
    {
         $slider = Slider::find($id);

        if( !is_null($slider) )
        {
           return view('admin.sedit')->with('slider', $slider);
        }
       else
        {
            return redirect()->back('');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
    {
        $plan               = Dowork::find($id);
        $plan->title        =$request->title;
        $plan->des          =$request->des;

        //Store Image In Folder
        if (isset($_FILES['file'])) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/assets/images/plan/', $name);
            
           if (file_exists(public_path($name =  $file->getClientOriginalName()))) 
            {
                unlink(public_path($name));
            };
           
            //Update Image
            $plan->logo = $name;
        }
        $plan->save();
          return redirect()->back();
    }
     // Work update
     public function wupdate(Request $request, $id)
    {
        $work               = Work::find($id);

        //Store Image In Folder
        if (isset($_FILES['file'])) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/assets/images/work/', $name);
            
           if (file_exists(public_path($name =  $file->getClientOriginalName()))) 
            {
                unlink(public_path($name));
            };
           
            //Update Image
            $work->image = $name;
        }
        $work->save();
          return redirect()->back();
    }
    
    // Slider update
     public function supdate(Request $request, $id)
    {
        $slider               = Slider::find($id);

        //Store Image In Folder
        if (isset($_FILES['file'])) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/assets/images/slider/', $name);
            
           if (file_exists(public_path($name =  $file->getClientOriginalName()))) 
            {
                unlink(public_path($name));
            };
           
            //Update Image
            $slider->image = $name;
        }
        $slider->save();
          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
         $plan = Dowork::find($id);

        if( !is_null ($plan) )
        {
            $plan->delete();
             return redirect()->back();
        }
        else{
             return redirect()->back();
        }
        
          
    }
    
     public function wdelete($id)
    {
         $plan = Work::find($id);

        if( !is_null ($plan) )
        {
            $plan->delete();
             return redirect()->back();
        }
        else{
             return redirect()->back();
        }
        
          
    }
    public function sdelete($id)
    {
         $plan = Slider::find($id);

        if( !is_null ($plan) )
        {
            $plan->delete();
             return redirect()->back();
        }
        else{
             return redirect()->back();
        }
        
          
    }
}
