@extends ('layouts.main')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Employees</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

    <h2>Existing Employees</h2>
    <div class="table-responsive">
        <a class="btn btn-primary" href="/employees/create">Create New Employee</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Department</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($employees as $employees )
          <tr>
            <td>{{ $employees->employeeid}}</td>
            <td>{{ $employees->username}}</td>
            <td>{{ $employees->password}}</td>
            <td>{{ $employees->type}}</td>
            <td>{{ $employees->department}}</td>
            <td>{{ $employees->telephone}}</td>
            <td>{{ $employees->email}}</td>
            <td>
              <a href="/employees/{{ $employees->employeeid}}" class="btn btn-primary">Update</a>
              <a href="/employees/delete/{{ $employees->employeeid}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </main>
@endsection