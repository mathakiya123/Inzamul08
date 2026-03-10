@extends('task.layout')
@section('title-name')
Daily Tasks
@endsection
@section('content')

@if(Session::get('userid'))
Welcome {{ Session::get('username') }}
@endif  
  
<div class="section-label fs-4">Total task <span class="badge badge-sm bg-danger text-white">{{$counttask}}</span></div>
<!-- pass a success messages  -->

@if(Session('success'))
<div class="alert alert-success">
<span>{{session('success')}}</span>
</div>
@endif
 @foreach($data as $row) 
  <div class="task-card task-important">
    <div class="task-info">
     
      <div>
        <strong>{{$row->title}}</strong>
        <br>
        <p>Assign Users :<strong>{{$row->assignto}}</strong></p>
        <div class="small">{{$row->start_time}} - {{$row->end_time}}</div>
      </div>
    </div>
    <a href='{{asset("/dashboard/edit-task/".$row->id)}}' onclick="return confirm('Are you sure to edit data ?')"><div class="bi bi-pencil text-primary ms-0"></div></a>

    <a href='{{asset("/dashboard/".$row->id)}}' onclick="return confirm('Are you sure to delete data ?')"><div class="bi bi-trash text-danger ms-0"></div></a> 
  </div>
 @endforeach

  @endsection