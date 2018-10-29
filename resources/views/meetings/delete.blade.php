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
      @include ('layouts.partials._alerts')

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->



    <form action="" method="post" class="form-horizontal">
      @csrf      
      <fieldset>
            
            <!-- Form Name -->
            <legend>Delete Existing Meeting</legend>

             

            <div class="form-group">
              <label class="col-md-4 control-label" for "start_time">Start Time</label>
              <div class="col-md-4">
              <input type="datetime-local" id="start_time" name="start_time" value="{{ $meetings->start_time}}" disabled />
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label" for "end_time">End Time</label>
              <div class="col-md-4">
              <input type="datetime-local" id="end_time" name="end_time" value="{{ $meetings->end_time}}"  disabled/>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="employeeid">Employee ID</label>  
              <div class="col-md-4">
              <input id="employeeid" name="employeeid" placeholder="employee id" class="form-control input-md" required="" type="text" value="{{ $meetings->employeeid}}" disabled>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="room_id">Room ID</label>  
              <div class="col-md-4">
              <input id="room_id" name="room_id" placeholder="room id" class="form-control input-md" required="" type="text" value="{{ $meetings->room_id}}" disabled>
                
              </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-danger " type="submit">Delete</button>
                <a href="{{ route('meetings.index') }}" class="btn btn-secondary">Cancel</a>
              </div>
            </div>
            
            </fieldset>
            </form>
    
        

  </main>
@endsection