            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
              <div class="sidebar-inner slimscrollleft">
              
                <!-- User -->
                <div class="user-box">
                  <div class="user-img">
                    <img src="{{ base_url() }}/extra/img/logo-pit-escudo.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                  </div>
                  <h5><a href="{{ base_url()}}/#">{{user.user}}</a></h5>
                  <ul class="list-inline">
                    <li><a href="{{ base_url() }}/#" ><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a href="{{ base_url() }}/#" class="text-custom"><i class="zmdi zmdi-power"></i></a></li>
                  </ul>
                </div>
                <!-- End User -->

                <!--- Sidebar -->
                <div id="sidebar-menu">
                  <ul>
                    <li class="text-muted menu-title">Menu</li>
                    <li><a href="{{ base_url() }}/" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span>Inicio</span></a></li>
                    <li><a href="{{ base_url() }}/data-studio/project" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span>Data Studio</span></a></li>
                    <li class="has_sub">
                      <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-settings"></i> <span>Administracion</span> <span class="menu-arrow"></span></a>
                      <ul class="list-unstyled">
                        <li><a href="{{ base_url() }}/user">Gestion de Usuarios</a></li>
                        <li><a href="{{ base_url() }}/user">BigQuery</a></li>
                        <li><a href="{{ base_url() }}/data-studio/settings">Data Studio</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->

              <div class="clearfix"></div>
            </div>
          </div>
        <!-- Left Sidebar End -->