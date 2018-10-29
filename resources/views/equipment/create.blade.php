@extends ('layouts.main')
@include ('layouts.partials._sidebar')
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
      @include ('layouts.partials._alerts')

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->



    <form action="" method="post" class="form-horizontal">
      
      @csrf
      <fieldset>
            
            <!-- Form Name -->
            <legend>Add New Equipment</legend>

           

          
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="equipment_name">Equipment Name</label>  
              <div class="col-md-4">
              <input id="equipment_name" name="equipment_name" placeholder="equipment name" class="form-control input-md" required="" type="text">
                
              </div>
            </div>
            
           

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>  
                <div class="col-md-4">
                <input id="description" name="description" placeholder=" description" class="form-control input-md" type="text">
                  
                </div>
              </div>

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="availability_status">Availability Status</label>  
                <div class="col-md-4">
                <select class="form-control" id="availability_status" name="availability_status" placeholder="room availability status" class="form-control input-md" required="">
                    <option>Available</option>
                    <option>Unavailable</option>
                </select>
                </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success" type="submit">Add</button>
              <a href="{{ route('equipment.index') }}" class="btn btn-danger">Cancel</a>
              </div>
            </div>
            
            </fieldset>
            </form>
    
        

  </main>
@endsection