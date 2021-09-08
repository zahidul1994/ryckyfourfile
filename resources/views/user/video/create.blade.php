@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('content')


<!-- Modal -->

       <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
         
           <textarea name="embedcode" id="" class="form-control pt-2" cols="30" rows="10" placeholder="Embed Code"></textarea> <br> <br>
          
           <a  href="{{url('admin/video')}}" class="btn btn-secondary" data-dismiss="modal">Close</a>
           <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
   
@stop