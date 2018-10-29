@extends ('layouts.main')
@include ('layouts.partials._sidebar')


@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Rooms</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <!--<div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Rooms</button>
          <button class="btn btn-sm btn-outline-secondary">Equipment</button>
          <button class="btn btn-sm btn-outline-secondary">Equipment in Rooms</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>-->
      </div>
       @include ('layouts.partials._alerts')

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

    <h2>Existing Rooms</h2>
    <div class="table-responsive">
        <a class="btn btn-primary" href="/rooms/create">Create New Room</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Room ID</th>
            <th>Room Name</th>
            <th>Location</th>
            <th>Capacity</th>
            <th>Room Description</th>
            <th>Availability Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rooms as $rooms )
          <tr>
            <td>{{ $rooms->room_id}}</td>
            <td>{{ $rooms->room_name}}</td>
            <td>{{ $rooms->location}}</td>
            <td>{{ $rooms->capacity}}</td>
            <td>{{ $rooms->room_description}}</td>
            <td>{{ $rooms->availability_status}}</td>
            <td>
              <a href="/rooms/{{ $rooms->room_id}}" class="btn btn-primary">Update</a>
              <a href="/rooms/delete/{{ $rooms->room_id}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </main>
@endsection