<div class="col-md-3 left_col" style="position: absolute; bottom: 0;">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <i>miam Admin</i></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="{{url('home')}}"><i class="fa fa-home"></i> Home</a></li>
                  <li><a><i class="fa fa-edit"></i> Food <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('add_food')}}">Add Food</a></li>
                      <li><a href="{{url('view_food')}}">View Food</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('orders')}}"><i class="fa fa-desktop"></i>Orders </a></li>
                  <li><a href="{{url('reservations')}}"><i class="fa fa-table"></i> Reservations </a></li>
                  
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>