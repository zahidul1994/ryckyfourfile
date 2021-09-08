@extends('layouts.admin')
@section('title','Admin Work')
@section('content')
<div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Add Work
</button>
<table class="table " border="1">
    <tr>
        <th>ID</th>      
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($plan as $p)
    <tr>
        <td>{{$p->id}}</td>
       
        <td><img src="{{asset('assets/images/work/'.$p->image)}}" height="200" width="200" alt=""></td>
        <td>
            <a href="{{ url('admin/work/wedit',$p->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this Work ?');" href="{{url('admin/work/delete/'.$p->id)}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{url('admin/work/create')}}" method="post" enctype="multipart/form-data">
       @csrf
          
           <input type="file" name="image" id="" class="form-control pt-2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@stop