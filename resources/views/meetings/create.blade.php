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



    <form action="" method="post" class="form-horizontal">
            <fieldset>
            
            <!-- Form Name -->
            <legend>Form Book New Meeting</legend>

             <!--@crsf-->

            <div class="form-group">
              <label for "start_time">Start Time</label>
              <input type="datetime-local" id="start_time" name="start_time" value="enter time and date" />
            </div>
            <div class="form-group">
              <label for "end_time">End Time</label>
              <input type="datetime-local" id="end_time" name="end_time" value="enter time and date" />
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Employee ID</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" placeholder="employee id" class="form-control input-md" required="" type="text">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="roomid">Room ID</label>  
              <div class="col-md-4">
              <input id="roomid" name="roomid" placeholder="room id" class="form-control input-md" required="" type="text">
                
              </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success">Save</button>
                <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
              </div>
            </div>
            
            </fieldset>
            </form>
    
        

  </main>
@endsection