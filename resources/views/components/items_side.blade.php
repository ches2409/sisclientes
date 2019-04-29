<?php function activeMenu($url){
    return request()->is($url) ? 'active': '';
}?>

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">SISGestion P&S</li>
{{-- STUB Item de Menú
+======================+
|ELEMENTO 1=> DASHBOARD|
|      "TREEVIEW"      |
+======================+
--}}
    <li class="{{ activeMenu('/') }}">
        <a href="{{ route ('inicio') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
            {{-- <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span> --}}
        </a>
        {{-- sub elemento del menú --}}
        {{-- <ul class="treeview-menu">
            <li class="active">
                <a href="/resources/views/admin/index">
                    <i class="fa fa-circle-o"></i> Dashboard v1
                </a>
            </li>
            <li>
                <a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2
                </a>
            </li>
        </ul> --}}
    </li>
{{-- STUB Item de Menú
+=======================+
|ELEMENTO 2=> empleados|
|     "TREEVIEW"       |
+======================+
--}}
    <li class="{{ request()->is('empleados', 'empleados/*' ) ? 'active' : '' }}">
        <a href="{{ route('empleados.index') }}">
            <i class="fa fa-id-card"></i>
            <span>Empleados</span>
            {{-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i> --}}
        </a>
        {{-- sub elemento del menú --}}
        {{-- <ul class="treeview-menu">
            <li>
                <a href="#">
                    <i class="fa fa-plus-circle"></i>
                    crear usuario
                </a>
            </li>
        </ul> --}}
    </li>

{{-- STUB Item de Menú
+=====================+
|ELEMENTO 3=> CLIENTES|
|     "TREEVIEW"      |
+=====================+
--}}
    <li class="c">
        <a href="{{ route ('clientes') }}">
            <i class="fa fa-address-book"></i>
            <span>Clientes</span>
            {{-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i> --}}
        </a>
        {{-- SUB ELEMENTO DEL MENU --}}
        {{-- <ul class="treeview-menu">
            <li>
                <a href="#">
                    <i class="fa fa-plus-circle"></i>
                    crear cliente
                </a>
            </li>
        </ul> --}}
    </li>
{{-- STUB Item de Menú
+======================+
|ELEMENTO 4=> PROYECTOS|
|     "TREEVIEW"       |
+======================+
--}}
    <li class="{{ request()->is('proyectos', 'proyectos/*') ? 'active' : '' }}">
        <a href="{{ route ('proyectos.index') }}">
            <i class="fa fa-briefcase"></i>
            <span>Proyectos</span>
            {{-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i> --}}
        </a>
        {{-- SUB ELEMENTO DEL MENU --}}
        {{-- <ul class="treeview-menu">
            <li>
                <a href="#">
                    <i class="fa fa-plus-circle"></i>
                    crear proyecto
                </a>
            </li>
        </ul> --}}
    </li>
{{-- STUB Item de Menú
+========================+
|ELEMENTO 5=> ACTIVIDADES|
|       "TREEVIEW"       |
+========================+
--}}
    <li class="{{ activeMenu('actividades') }}">
        <a href="{{ route ('tareas.index') }}">
            <i class="fa fa-calendar"></i>
            <span>Actividades</span>
            {{-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i> --}}
        </a>
        {{-- sub elemento del menú --}}
        {{-- <ul class="treeview-menu">
            <li>
                <a href="#">
                    <i class="fa fa-plus-circle"></i>
                    crear actividad
                </a>
            </li>
        </ul> --}}
    </li>
{{-- STUB Item de Menú
+=======================+
|ELEMENTO 6=> PARÁMETROS|
|      "TREEVIEW"       |
+=======================+
--}}
    <li class="{{ request()->is('usuarios', 'necesidadesPrim','tiposProyectos','tiposProyectos/create', 'tareatipos', 'tareatipos/*') ? 'active' : '' }} treeview">
        <a href="#">
            <i class="fa fa-wrench"></i>
            <span>Parametros</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        {{-- sub elemento del menu --}}
        <ul class="treeview-menu">
            <li class="{{ activeMenu('usuarios') }}">
                <a href="">
                    <i class="fa fa-users"></i>
                    Usuarios
                </a>
            </li>
            <li class="{{ activeMenu('necesidadesPrim') }}">
                <a href="{{ route ('necesidadesPrim') }}">
                    <i class="fa fa-bullseye"></i>
                    necesidades del cliente
                </a>
            </li>

            {{-- sub elemento interno --}}
            <li>
                <a href="#">
                    <i class="fa fa-car"></i>
                    otras necesidades
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li>
                <a href="#">
                    <i class="fa fa-shopping-bag"></i>
                    propiedades negociables
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li>
                <a href="#">
                    <i class="fa fa-hourglass-start"></i>
                    tiempos de inversión
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('tiposProyectos') }}">
                <a href="{{ route('tiposProyectos.index') }}">
                    <i class="fa fa-building"></i>
                    tipos de proyectos
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li class="{{ activeMenu('tareatipos') }}">
                <a href="{{ route('tareatipos.index') }}">
                    <i class="fa fa-calendar"></i>
                    tipos de Tareas
                </a>
            </li>
            {{-- sub elemento interno --}}
            <li>
                <a href="#">
                    <i class="fa fa-list"></i>
                    clasificación
                </a>
            </li>
        </ul>
    </li>
{{-- NOTE Elementos desactivados (uso futuro)
+==============================+
|ELEMENTOS SIN USAR EN LA BARRA|
|         "INACTIVOS"          |
+==============================+
--}}
    {{-- opciones "layout" --}}
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> --}}
    {{-- opciones "widgets-link" --}}
        {{-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> --}}
    {{-- opciones "charts" --}}
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li> --}}
    {{-- opciones "ui" --}}
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> --}}
    {{-- opciones "forms"
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li> --}}
    {{-- opciones "table"
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> --}}
    {{-- opciones "calendar"
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li> --}}
    {{-- opciones "mail-box"
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> --}}
    {{-- opciones "examples"
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li> --}}
    {{-- opciones "multilevel"
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> --}}
    {{-- otras opciones
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
</ul>
