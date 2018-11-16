@extends ('layouts.main')
@include ('layouts.partials._sidebar')
@section ('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Employees</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <!--<div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>-->
      </div>
      @include ('layouts.partials._alerts')

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->



    <form action="" method="POST" class="form-horizontal">
      
      @csrf
      <fieldset>
            
          <div class="form-group row">
              <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

              <div class="col-md-6">
                  <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                  @if ($errors->has('username'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                  @endif
              </div>
          </div>


          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
          </div>

          <div class="form-group row">

              <label for="type" class="col-md-4 control-label text-md-right" >User Type:</label>
              
              <div class="col-md-6">
              
              <select class="form-control" name="type" id="type">
              
              <option value="admin">Admin</option>
              
              <option value="member">Member</option>
              
              </select>
              
              </div>
          </div>

          <div class="form-group row">
              <label class="col-md-4 control-label text-md-right" for="department">Department</label>  
              <div class="col-md-6">
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
          <div class="form-group row">
              <label class="col-md-4 control-label text-md-right" for="telephone">Telephone Number</label>  
              <div class="col-md-6">
              <input id="telephone" name="telephone" placeholder="telephone number" class="form-control input-md" required="" type="text" >
                
              </div>
            </div>

          
          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div> 
          
          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
                  <a href="{{ route('employees.index') }}" class="btn btn-danger">Cancel</a>

                  
              </div>
          </div>
      </form>
 


    
        

  </main>
@endsection