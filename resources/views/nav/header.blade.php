<header class="main-header">
<style type="text/css">
  #logo_id{
      background-color: #26417f
  }
  #logo_id:hover{
      background-color: #26417f
  }
</style>
    <!-- Logo -->
    <div class="logo" id="logo_id" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
     <!--  <span class="logo-lg"><b>metrics</b>flow</span> -->
    </div>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <!--<span class="label label-warning">10</span>-->
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have no new notifications</li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a class="dropdown-toggle" >
              <img src={{ Auth::user()->photo_url }} class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name}}</span>
            </a>

          </li>
          <!-- Control Sidebar Toggle Button -->
         <!--  <li class="treeview">
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
            <ul class="dropdown-menu" role="menu">
              @if (Auth::user()->role_id == 1)
                <li><a href="/tokens/manage">Manage Tokens</a></li>
                <li><a href="/users/manage">Manage Users</a></li>
              <li><a href="/settings">Settings</a></li>
              <li class="divider"></li>
              @endif
              <li><a href="/profile">Profile</a></li>
              <li><a href="/logout">Logout</a></li>            
            </ul>
          </li>

        </ul>
      </div>

    </nav>
  </header>