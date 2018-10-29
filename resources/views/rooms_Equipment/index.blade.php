@extends ('layouts.main')
@include ('layouts.partials._sidebar')
@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Equipment</h1>
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

    <h2>Existing Equipment In Rooms</h2>
    <div class="table-responsive">
        <a class="btn btn-primary" href="/rooms_Equipment/create">Add New Equipment</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Equipment ID</th>
            <th>Room ID</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rooms_Equipment as $rooms_Equipment )
          <tr>
            <td>{{ $rooms_Equipment->roomequipment_id}}</td>
            <td>{{ $rooms_Equipment->equipment_id}}</td>
            <td>{{ $rooms_Equipment->room_id}}</td>
            <td>
              <a href="/rooms_Equipment/{{ $rooms_Equipment->roomequipment_id}}" class="btn btn-primary">Update</a>
              <a href="/rooms_Equipment/delete/{{ $rooms_Equipment->roomequipment_id}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </main>
@endsection