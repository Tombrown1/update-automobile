<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('dashboard') }}" class="brand-link">
          
          <span class="brand-text text-white text-center" style="font-size: 14px;font-weight: bolder; text-transform: uppercase;">

          </span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="#" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <span class="p-1 text-white">
                Admin
              </span>
              <span class="dot text-green"></span>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <i class="nav-icon fa fa-th text-white"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

               <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-newspaper text-cyan"></i>
                    <p>
                     About 
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">                    
                    
                    <li class="nav-item">
                      <a href="{{route('about.us')}}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About Section</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('about.category')}}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>About Category</p>
                      </a>
                    </li>

                    <!--<li class="nav-item">
                      <a href="{{ url('/admin/blog/tag') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tags</p>
                      </a>
                    </li>-->

                  </ul>
              </li> 

              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-newspaper text-cyan"></i>
                    <p>
                     Our Services
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">                    
                    
                    <li class="nav-item">
                      <a href="{{route('services')}}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Services</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('service.category')}}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Service Category</p>
                      </a>
                    </li>

                    <!--<li class="nav-item">
                      <a href="{{ url('/admin/blog/tag') }}" class="nav-link ml-3">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tags</p>
                      </a>
                    </li>-->

                  </ul>
              </li>              

              <li class="nav-item">
                <a href="{{route('slider')}}" class="nav-link">
                  <i class="nav-icon fa fa-bell text-purple"></i>
                  <p>Sliders</p>
                </a>
              </li>

              
              <li class="nav-item">
                <a href="{{route('admin.testimonial')}}" class="nav-link">
                  <i class="nav-icon fa fa-bell text-purple"></i>
                  <p>Testimonial</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{route('view.contact')}}" class="nav-link">
                  <i class="nav-icon fa fa-contact text-green"></i>
                  <p>Contact</p><span class="badge badge-info badge-sm float-right"></span>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('all.booking') }}" class="nav-link">
                  <i class="nav-icon fa fa-cogs text-pink"></i>
                  <p>Booking</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <i class="nav-icon fa fa-cogs text-pink"></i>
                  <p>Setting</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href=""
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="nav-icon fa fa-power-off text-red"></i>
                  <!-- <p>{{ __('Logout') }}</p> -->
                </a>

                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>