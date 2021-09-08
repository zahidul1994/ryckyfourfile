@extends('layouts.admin')
@section('title','Video list')
@section('content')
<div>
<a  href="{{url('/admin/video/create')}}" class="btn btn-primary" >
 Add Video
</a>
<table class="table">
    <tr>
        <th>SL</th>
       <th>Video</th>
        <th>Action</th>
    </tr>
    @foreach($infos as $p)
    <tr>
        <td>{{$i++}}</td>
        <td style="wdith:20px;height:30px">{!! $p->embedcode !!}}</td>
       
        <td>
          <div class="action-panel">
            <ul>
                
             <li>
                <a href="{{route('video.edit',$p->id)}}" class="btn btn-sm btn-primary">Edit</a>
              </li>
              
              <li>
                <form action="{{ route('video.destroy',$p->id) }}" method="POST">
                  @csrf

                  @method('DELETE')

    

                  <button type="submit" class="btn btn-danger">Delete</button>

              </form>
              </li>
            </ul>
          </div>
          <!-- Modal -->
         
        </td>
    </tr>
    @endforeach
</table>

</div>


<!-- Modal -->

@stop