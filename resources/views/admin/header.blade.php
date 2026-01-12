<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              



              <ul class="nav navbar-nav navbar-right">
                
                  <li class="align-items-center">
                  <form class="" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Logout">
                    

                </form>                  
                </li>
                
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->