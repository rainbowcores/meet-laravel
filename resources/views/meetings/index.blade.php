@extends ('layouts.main')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Meetings</h1>
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

    <h2>Booked Meetings</h2>
    <div class="table-responsive">
        <a class="btn btn-primary" href="/meetings/create">Book New Meeting</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Meeting ID</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Booking Employee ID</th>
            <th>Meeting Room ID</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($meetings as $meetings )
          <tr>
            <td>{{ $meetings->meeting_id}}</td>
            <td>{{ $meetings->start_time}}</td>
            <td>{{ $meetings->end_time}}</td>
            <td>{{ $meetings->employeeid}}</td>
            <td>{{ $meetings->room_id}}</td>
            <td><a href="" class="btn btn-primary">Update</a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </main>
@endsection