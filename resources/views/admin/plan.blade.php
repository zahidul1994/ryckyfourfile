@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('content')
<div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Add Plan
</button>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Logo</th>
        <th>Action</th>
    </tr>
    @foreach($plan as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{$p->des}}</td>
        <td><img src="{{asset('assets/images/plan/'.$p->logo)}}" height="100" alt=""></td>
        <td>
          <div class="action-panel">
            <ul>
                
             <li>
                <a href="{{url('admin/plan/edit', $p->id)}}" class="btn btn-sm btn-primary">Edit</a>
              </li>
              
              <li>
                <a href="" class="btn btn-sm btn-danger mt-2" data-toggle="modal" data-target="#delete{{ $p->id }}">Delete</a>
              </li>
            </ul>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="delete{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Do you confirm to delete this </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul>
                    <li>
                      <form action="{{url('admin/plan/destroy', $p->id)}}" method="POST">
                         @csrf
                          <button  class="btn btn-danger">Yes</button>
                      </form>
                        
                    </li>
                    <li>
                        <button   data-dismiss="modal" class="btn btn-success">No</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>  
        <!-- Modal end -->
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{url('admin/plan/create')}}" method="post" enctype="multipart/form-data">
       @csrf
           <input type="text" name="title" class="form-control" id="" placeholder="title"><br> <br>
           <textarea name="des" id="" class="form-control pt-2" cols="30" rows="10" placeholder="Description"></textarea> <br> <br>
           <input type="file" name="logo" id="" class="form-control pt-2">
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