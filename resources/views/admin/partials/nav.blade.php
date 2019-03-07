<ul class="sidebar-menu" data-widget="tree">
  <li class="header">NAVEGACIÓN</li>
  <!-- Optionally, you can add icons to the links -->
  <li ><router-link to="/dashboard" ><i class="fa fa-dashboard" ></i> Dashboard</a></router-link></li>


  <li class="treeview">
    <a href="#"><i class="fa fa-book"></i> <span>Productos</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li ><router-link to="/suscripcion/lista" ><i class="fa fa-eye" ></i>Lista</a></router-link></li>
      <li ><router-link to="/suscripcion/crear" ><i class="fa fa-pencil" ></i>Crear Producto</router-link> </li>
    </ul>

  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-book"></i> <span>Clientes</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li ><router-link to="/suscripcion/lista" ><i class="fa fa-eye" ></i>Lista</a></router-link></li>
      <li ><router-link to="/suscripcion/crear" ><i class="fa fa-pencil" ></i>Crear </router-link> </li>
    </ul>

  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-book"></i> <span>Suscripcion</span>
      <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
      <li ><router-link to="/suscripcion/lista" ><i class="fa fa-eye" ></i>Lista</a></router-link></li>
      <li ><router-link to="/suscripcion/crear" ><i class="fa fa-pencil" ></i>Crear </router-link> </li>
    </ul>

  </li>
  
</ul>