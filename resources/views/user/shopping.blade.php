@extends('layouts.user')
@section('title','User Shopping')
@section('content')

 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="card-style">
    		  <div class="card-body mt-1">
    			  <div class="alert alert-info" role="alert">
    				<marquee behavior="" direction="">Notice: Best wishes and best wishes to all the recipients of the offer. Thanks for staying with us.</marquee>
    			  </div>
    			  <div class="card-body-bg-style text-center" style="width: 18rem;margin:0 auto;">
    				<form method="POST" action="" accept-charset="UTF-8">
                       <input class="form-control" required="" placeholder="Pin" name="pin" type="text">
                        <input class="form-control btn btn-success" type="submit" value="Shoping Active">
                    </form>
    			</div>
    		  </div>
    	    </div>
         </div>
     </div>
 </div>

@stop