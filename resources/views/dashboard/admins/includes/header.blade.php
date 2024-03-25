<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Visit Site</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item d-none d-sm-inline-block">

        <div class="pull-right">
          <a href="{{ route('dashboard.logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sign out</a>
          <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
          </form>
        </div>

        {{-- <a href="{{ route('doLogout') }}" class="nav-link">Logout <i class="fas fa-user"></i></a> --}}
      </li>
    </ul>
  </nav>
  