@extends('layouts.admin')
@section('title','Edit Vodeo')
@section('content')


<!-- Modal -->

       <form action="{{route('video.update',$video->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
       @method('PUT')
           <textarea name="embedcode" class="form-control pt-2" cols="30" rows="10" placeholder="Embed Code">{{$video->embedcode}}</textarea> <br> <br>
          
           <a  href="{{url('admin/video')}}" class="btn btn-secondary" >Close</a>
           <button type="submit" class="btn btn-primary">Update</button>
      </form>
   
@stop