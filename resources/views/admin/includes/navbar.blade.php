  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @auth
                  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image">
                  <span class="hidden-xs" >Mohamed Nagy</span>
              @endauth
          </a>
          <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                 
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">

                  <div class="pull-right">
                  </div>
                  <div class="pull-left">
                    {{-- <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()"> --}}
                        <form method="Post" action='{{route("admin.logout")}}' >
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                          </form>
                    {{-- </a> --}}
                  </div>


              </li>
          </ul>
      </li>
  </ul>
  </nav>
  <!-- /.navbar -->