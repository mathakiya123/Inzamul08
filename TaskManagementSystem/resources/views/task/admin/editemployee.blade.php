@extends('task.admin.layout')
@section('title-name')
::edit employee
@endsection 
@section('dashboard')
<main class="col-lg-10 col-md-9 ms-sm-auto p-4">
<!-- Top Bar -->
<div class="topbar p-3 mb-4 d-flex justify-content-between align-items-center shadow-sm">
<h5 class="fw-bold mb-0">Edit  employee</h5>
<span class="badge bg-warning text-dark px-3 py-2">Admin Panel</span>
</div>
<!-- Progress + Table -->
<div class="row g-4">
<!-- Table -->
<div class="col-lg-8">
<div class="card dashboard-card shadow-sm p-4">
<!-- pass a success messages  -->
@if(Session('success'))
<div class="alert alert-success">
<span>{{session('success')}}</span>
</div>
@endif
<h6 class="fw-bold mb-3">Edit existing employee </h6>
<form method="post">
@csrf
<!-- Name -->
<div class="mb-3">
<label class="form-label text-success">Edit Name</label>
<input type="text" name="name" value="{{$data->name}}" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter name">
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<!-- Age -->
<div class="mb-3">
<label class="form-label text-success">Edit Age</label>
<input type="number" name="age" value="{{$data->age}}" class="form-control @error('age') is-invalid @enderror" placeholder="Enter age">
@error('age')
<div class="invalid-feedback">{{ $message }}</div>
@enderror

</div>

<!-- Phone -->
<div class="mb-3">
<label class="form-label text-success">Edit Phone</label>
<input type="tel" name="phone" value="{{$data->phone}}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
@error('phone')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<!-- Address -->
<div class="mb-3">
<label class="form-label text-success">Edit Address</label>
<textarea  name="address" class="form-control @error('phone') is-invalid @enderror" rows="3" placeholder="Enter address">{{$data->address}}</textarea>
@error('address')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<!-- Submit -->
<div class="d-grid">
<button type="submit" class="btn btn-primary">Update Employee</button>
</div>
</form>

</div>
</div>

</div>

</main>

@endsection