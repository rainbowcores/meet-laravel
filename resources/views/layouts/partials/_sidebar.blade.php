<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        
        <li class="nav-item">
          <a class="btn btn-lg btn-outline-secondary" href="{{route('rooms.index') }}">
            <span data-feather="align-justify">(current)</span>
            Rooms
          </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-secondary" href="{{route('rooms_Equipment.index')}}">
              <span data-feather="align-justify">(current)</span>
              Equipment In Rooms
            </a>
          </li>
          <li class="nav-item">
          <a class="btn btn-lg btn-outline-secondary" href="{{route('employees.index')}}">
              <span data-feather="users">(current)</span>
              Employees
            </a>
        <li class="nav-item">
          <a class="btn btn-lg btn-outline-secondary" href="{{route('meetings.index') }}">
            <span data-feather="align-justify"></span>
            Meetings <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="btn btn-lg btn-outline-secondary" href="{{route('equipment.index') }}">
            <span data-feather="align-justify">(current)</span>
            Equipment
          </a>
        </li>
        
        </li>
        <li class="nav-item">
            <a href="{{ route('meetings.export') }}" class="btn btn-lg btn-outline-secondary">
                <span data-feather="archive"></span>
              Export Meeting Data
            </a>
      </ul>

      <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
          </a>
        </li>
      </ul>-->
    </div>
  </nav>