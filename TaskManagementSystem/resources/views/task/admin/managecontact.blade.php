   @extends('task.admin.layout')
   @section('title-name')
   ::Manage contact
   @endsection 
   @section('dashboard')
   <main class="col-lg-10 col-md-9 ms-sm-auto p-4">
      <!-- Top Bar -->
      <div class="topbar p-3 mb-4 d-flex justify-content-between align-items-center shadow-sm">
        <h5 class="fw-bold mb-0">Manage All contact</h5>
        <span class="badge bg-warning text-dark px-3 py-2">Admin Panel</span>
      </div>
      <!-- Progress + Table -->
      <div class="row g-4">


        <!-- Table -->
        <div class="col-lg-12">
          <div class="card dashboard-card shadow-sm p-4">
            <h6 class="fw-bold mb-3">Manage all contact  <button class="bg-danger text-white float-end p-2 border-0">
               Total contact {{ $data->count() }}
            </button></h6>

            <!-- pass a success messages  -->
@if(Session('del'))
<div class="alert alert-danger">
<span>{{session('del')}}</span>
</div>
@endif

            <div class="table-responsive">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($data as $row)   
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->subject}}</td>
                    <td>{{$row->message}}</td>
                    <td><a href='{{asset("/admin-login/manage-contact/".$row->id)}}'><button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete contact ?')"><span class="bi bi-trash"></button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>

      </div>

    </main>

    @endsection