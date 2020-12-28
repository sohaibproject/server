
 
<aside class="main-sidebar sidebar-dark-primary elevation-4">
 
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{URL::asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3  d-flex" >
        <div class="image">
          <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('get.profile')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>profile</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('get.allProduit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>liste de produit</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{route('get.categorie')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Catégorie de produit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('get.opinion')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Avis client </p>
                    
                  </a>
                </li>
              <li class="nav-item">
                <a href="" class="nav-link">
               <i class="right fas fa-angle-left"></i>
                  <p> les operation</p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{route('add.produit')}}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>add produit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('add.categorie')}}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>add Catégorie</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('add.opinion')}}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>add client Opinion</p>
                    </a>
                  </li>
                  
                </ul>
                {{-- <li class="nav-item">
                  <a href="./index.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Décoration et contrôle site</p>
                  </a>
                </li> --}}

              </li>
            </ul>
          </li>
          
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>
