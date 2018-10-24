@extends ('layouts.main')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Equipment</h1>
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

    <h2>Existing Equipment</h2>
    <div class="table-responsive">
        <a class="btn btn-primary" href="/equipment/create">Add New Equipment</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Equipment ID</th>
            <th>Equipment Name</th>
            <th>Description</th>
            <th>Availability Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($equipment as $equipment )
          <tr>
            <td>{{ $equipment->equipment_id}}</td>
            <td>{{ $equipment->equipment_name}}</td>
            <td>{{ $equipment->description}}</td>
            <td>{{ $equipment->availability_status}}</td>
            <td>
              <a href="/equipment/{{ $equipment->equipment_id}}" class="btn btn-primary">Update</a>
              <a href="/equipment/delete/{{ $equipment->equipment_id}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </main>
@endsection