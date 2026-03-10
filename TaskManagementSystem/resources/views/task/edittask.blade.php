@extends('task.layout')
@section('title-name')
Daily Tasks
@endsection
@section('content')
<!-- pass a success messages  -->
@if(Session('success'))
<div class="alert alert-success">
<span>{{session('success')}}</span>
</div>
@endif
 
  <div class="task-card">
    <form method="post">
    @csrf
<div class="mb-3">
<label class="form-label">Edit Task Title</label>
<input type="text" name="title" value="{{$editdata->title}}" class="form-control" placeholder="Enter task title">
</div>

<div class="mb-3">
<label class="form-label">Task Type</label>
<select class="form-select" name="tasktype">
<option value='important'>Important</option>
<option value='notimportant'>Not improtant</option>
</select>
</div>


<div class="mb-3">
<label class="form-label">Assign To</label>
<select class="form-select" name="assignto">
<option value=''>-assign To-</option>
@foreach($assignto as $row)
<option value='{{$row->name}}'>{{$row->name}}</option>
@endforeach
</select>
</div>

<div class="mb-3">
<label class="form-label">Date</label>
<input type="date" name="date" value="{{$editdata->date}}" class="form-control">
</div>

<div class="row">
<div class="col-6 mb-3">
<label class="form-label">Start Time</label>
<input type="time" name="start_time" value="{{$editdata->start_time}}" class="form-control">
</div>
<div class="col-6 mb-3">
<label class="form-label">End Time</label>
<input type="time" name="end_time" class="form-control" value="{{$editdata->end_time}}">
</div>
</div>

<div class="mb-2">
<label class="form-label">Description</label>
<textarea name="descriptions" class="form-control" rows="3" placeholder="Optional">
{{$editdata->descriptions}}
</textarea>
</div>

<button type="submit" class="btn btn-warning w-100 fw-semibold">
Update Task
</button>
</form>

</div class="mb-5">


@endsection