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



    <form action="" method="post" class="form-horizontal">
      
      @csrf
      <fieldset>
            
            <!-- Form Name -->
            <legend>Add New Employee</legend>

           

          
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="username">Username</label>  
              <div class="col-md-4">
              <input id="username" name="username" placeholder="Username" class="form-control input-md" required="" type="text" >
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">Password</label>  
                <div class="col-md-4">
                <input id="password" name="password" placeholder="Password" class="form-control input-md" required="" type="password" >
                  
                </div>
              </div>
            
              <div class="form-group">

                <label for="type" class="col-md-4 control-label" >User Type:</label>
                
                <div class="col-md-4">
                
                <select class="form-control" name="type" id="type">
                
                <option value="admin">Admin</option>
                
                <option value="member">Member</option>
                
                </select>
                
                </div>
            </div>

             <!-- Text input-->
             <div class="form-group">
                <label class="col-md-4 control-label" for="department">Department</label>  
                <div class="col-md-4">
                <select class="form-control" id="department" name="department" placeholder="department" class="form-control input-md" required="" >
                    <option>Finance</option>
                    <option>Sales and Marketing</option>
                    <option>Operations</option>
                    <option>IT</option>
                    <option>HR</option>
                </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="telephone">Telephone Number</label>  
                <div class="col-md-4">
                <input id="telephone" name="telephone" placeholder="telephone number" class="form-control input-md" required="" type="text" >
                  
                </div>
              </div>

              <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>  
                <div class="col-md-4">
                <input id="email" name="email" placeholder=" email" class="form-control input-md" type="email" >
                  
                </div>
              </div>

             
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="button1id"></label>
              <div class="col-md-8">
                <button id="button1id" name="button1id" class="btn btn-success" type="submit">Add</button>
                <a href="{{ route('employees.index') }}" class="btn btn-danger">Cancel</a>
              </div>
            </div>
            
            </fieldset>
            </form>
    
        

  </main>
@endsection