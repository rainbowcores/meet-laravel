@extends ('layouts.main')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Rooms</h1>
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
      @csrf      
      <fieldset>
            
            <!-- Form Name -->
            <legend>Update Existing Room</legend>

           

          
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="room_name">Room Name</label>  
              <div class="col-md-4">
              <input id="room_name" name="room_name" placeholder="room name" class="form-control input-md" required="" type="text" value="{{ $rooms->room_name}}">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="location">Location</label>  
              <div class="col-md-4">
              <select class="form-control" id="location" name="location" placeholder="location" class="form-control input-md" value="{{ $rooms->location}}" required="">
                  <option>1st Floor</option>
                  <option>2nd Floor</option>
                  <option>3rd Floor</option>
                  <option>4th Floor</option>
              </select>
              </div> 
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="capacity">Capacity</label>  
                <div class="col-md-4">
                <input id="capacity" name="capacity" placeholder="capacity" class="form-control input-md" required="" type="number" min="1"value="{{ $rooms->capacity}}">
                  
                </div>
              </div>

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="room_description">Room Description</label>  
                <div class="col-md-4">
                <input id="room_description" name="room_description" placeholder=" room description" class="form-control input-md" type="text" value="{{ $rooms->room_description}}">
                  
                </div>
              </div>

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="availability_status">Room Availability Status</label>  
                <div class="col-md-4">
                <select class="form-control" id="availability_status" name="availability_status" placeholder="room availability status" class="form-control input-md" value="{{ $rooms->availability_status}}" required="">
                    <option>Available</option>
                    <option>Unavailable</option>
                </select>
                </div>
              </div>
            
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success " type="submit">Save</button>
                <a href="{{ route('rooms.index') }}" class="btn btn-danger">Cancel</a>
              </div>
            </div>
            
            </fieldset>
            </form>
    
        

  </main>
@endsection