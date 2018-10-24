@extends ('layouts.main')

@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Equipment in Rooms</h1>
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
            <legend>Add New Equipment in Rooms</legend>

           

          
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="equipment_id">Equipment ID</label>  
              <div class="col-md-4">
              <input id="equipment_id" name="equipment_id" placeholder="equipment id" class="form-control input-md" required="" type="text">
                
              </div>
            </div>
            
           

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="room_id">Room ID</label>  
                <div class="col-md-4">
                <input id="room_id" name="room_id" placeholder=" room_id" class="form-control input-md" type="text">
                  
                </div>
              </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success" type="submit">Add</button>
              <a href="{{ route('rooms_Equipment.index') }}" class="btn btn-danger">Cancel</a>
              </div>
            </div>
            
            </fieldset>
            </form>
    
        

  </main>
@endsection