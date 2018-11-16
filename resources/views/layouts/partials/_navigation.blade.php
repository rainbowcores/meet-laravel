<!--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"></a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav navbar-nav" href="#"></a>
        <a class="nav navbar-nav" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  Sign out
           
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </a>
      </li>
    </ul>
  </nav>-->
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <div class="container-fluid">
      <ul class="nav navbar-brand mx-auto">
          <li class="active">ABC Meetings</li>
            
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li><a class="btn btn-info btn btn-default " href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            
              Sign out
        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </a>
        </li>
      </ul>
    </div>
  </nav> 