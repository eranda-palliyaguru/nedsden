 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CLOUD arm</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["name"]; ?></a>
<form action="../auth/logout.php" method="post" accept-charset="utf-8">
          <input type="hidden" name="action" value="logOut" />
          <button type="submit" class="btn btn-block btn-outline-primary">Log out</button>
        </form>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box "></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="diagram" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagram</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">EXAMPLES</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tags"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="make" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Make Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="model" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sub" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="diagram" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagram</p>
                </a>
              </li>
            </ul>
          </li>










        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
