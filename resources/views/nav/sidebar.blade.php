<style type="text/css">
  span{
    font-size: 20px;
  }
  li:hover{
    background-color: #26417f;
  }
</style>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
      @if(Auth::user()->hasRole('Admin'))
        <li class="active">
          <a href="/home">
            <div align="center">
              <i class="fa fa-dashboard fa-4x"></i>
              <span>Home</span>
            </div>
          </a>
        </li>
        <li class="treeview">
          <div align="center">
            <a href="#">
              <i class="fa fa-share-alt fa-4x"></i> <span>Portfolio</span>
             <!--  <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span> -->
            </a>
          </div>
            <ul class="treeview-menu">
              <li><a href="/portfolio">Overview</a></li>
              @foreach(Auth::user()->portfolios as $portfolio)
                <li>
                  <a href="/portfolio/switch/{{ $portfolio->id }}">
                    {{$portfolio->name}}
                  @if(Auth::user()->currentPortfolio() == $portfolio)
                    <i class="fa fa-check text-green"></i>
                  @endif
                    
                  </a>                                                          
                </li>
              @endforeach
              <li><a href="/portfolio/add">Add New</a></li>
              <li><a href="/portfolio/settings">Settings</a></li>
            </ul>
        </li>
        <li class="treeview">
          <div align="center">
            <a href="#">
              <i class="fa fa-bullhorn fa-4x"></i>
              <span>Campaigns</span>
             <!--  <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span> -->
            </a>
          </div>
          <ul class="treeview-menu">
            <li><a href="/campaign/clear">Overview</a></li>
            @if(Auth::user()->hasPortfolios())
              @foreach(Auth::user()->currentPortfolio()->campaigns as $campaign)
                <li>
                  <a href="/campaign/switch/{{ $campaign->id }}">
                    {{ $campaign->name }}
                  @if(Auth::user()->currentCampaign() == $campaign)
                      <i class="fa fa-check text-green"></i>
                  @endif
                  </a>
                </li>
              @endforeach
            <li><a href="/campaign/add">Add New</a></li>
            @endif
            <li><a href="/campaign/settings">Settings</a></li>
          </ul>
        </li>
        <li class="treeview">
          <div align="center">
            <a href="/leads">
              <i class="fa fa-dot-circle-o fa-4x"></i>
              <span>Leads</span>
            </a>
          </div>
        </li>
        <li class="treeview">
          <div align="center">
            <a href="/report">
              <i class="fa fa-bar-chart fa-4x"></i>
              <span>Reports</span>
            </a>
          </div>
        </li> 
        @elseif(Auth::user()->hasRole('Client'))  
        <li class="treeview">
          <div align="center">
            <a href="/leads">
              <i class="fa fa-dot-circle-o fa-4x"></i>
              <span>Leads</span>
            </a>
          </div>
        </li>
        @endif
        <li class="treeview">
          <div align="center">
            <a href="/allcontents">
              <i class="fa fa-share-alt fa-4x"></i> <span>Contents</span>
            </a>
          </div>
        </li>
        <li class="treeview">
          <div align="center">
            <a href="/leads">
              <i class="fa fa-dot-circle-o fa-4x"></i>
              <span>Leads</span>
            </a>
          </div>
        </li>
        <li class="treeview">
          <div align="center">
            <a href="/report">
              <i class="fa fa-bar-chart fa-4x"></i>
              <span>Reports</span>
            </a>
          </div>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
