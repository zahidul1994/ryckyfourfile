@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('content')

<div class="card card-style">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <div class="container">
   <div class="row">
     <div class="col-lg-10 offset-lg-1">
      <form action="{{ url('admin/slider/supdate', $slider->id)}}" enctype="multipart/form-data" method="POST">
        @csrf

         <div class="row form-group">
            <div class="col-lg-3"><label for="">Logo </label></div> 
            <div class="col-lg-9">
              <input type="file" name="file" class="form-control" value="">
            </div> 
        </div>

         <div class="row form-group">
            <div class="col-lg-12">
              <input type="submit" name="addPlan" class="btn btn-success" class="form-control" value="Save Changes">
            </div> 
        </div>
      </form>
     </div>
   </div>
 </div>
   
  </div>
</div>
 

@stop