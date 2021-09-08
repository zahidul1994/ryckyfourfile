@extends('layouts.user')
@section('title','User New Membar')
@section('content')
 <div class="contianer">
     <div class="row">
         <div class="col-lg-12">
             <div class="card-style" style="max-width:800px;width:100%;margin:0 auto;">
                <div class="card-header-style ">
                <strong class="card-title">Filup your Information</strong>
                </div>
                
               <div class="card-body-style">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" required="required" autocomplete="of">    
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Account Type</label>
                                <select  class="form-control" required="">
                                <option value="">Select</option>
                                <option value="youtube">Youtube</option>
                                <option value="shop">Shopping</option>
                                </select>  
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control">    
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>E-Mail Address</label>
                                <input type="email" class="form-control"required="required" autocomplete="of">    
                           </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control"required="required" autocomplete="of">    
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" required="required" autocomplete="of">    
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" class="form-control" required="required" autocomplete="of">    
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Side</label>
                                <select class="form-control" required="" name="hand"><option selected="selected" value="">Hand Side</option><option value="1">Left Side</option><option value="2">Right Side</option></select>  
                           </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Placement ID</label>
                                <input type="number" class="form-control" required="required" autocomplete="of">    
                           </div>
                        </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="form-group">
                               <input type="submit" class="form-control text-center" value="Submit" style="background-color:#28a745;color:#fff;">
                           </div>
                       </div>
                   </div>
               </div>
                
            </div>
         </div>
     </div>
 </div>


@stop