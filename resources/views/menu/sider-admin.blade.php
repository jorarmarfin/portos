<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            {!!Form::menu('Escritorio',route('home.index'),'icon-home','start')!!}
            @can('IsAdmin',Auth::user())
                <li class="heading">
                    <h3 class="uppercase">Sistema</h3>
                </li>
                {!!Form::menu('Usuarios',route('admin.users.index'),'icon-users')!!}
                <li class="nav-item  ">
                    {!!Form::menulink('Configuracion','#','fa fa-cogs')!!}
                    <ul class="sub-menu">
                        {!!Form::menu('Maestro',route('catalogo.gestion','maestro'))!!}
                        {!!Form::menu('Roles',route('catalogo.gestion','roles'))!!}
                    </ul>
                </li>
                {!!Form::menu('Aulas',route('home.index'),'fa fa-cubes')!!}
            @endcan

            <li class="heading">
                <h3 class="uppercase">Modulos</h3>
            </li>
            @can('IsFoto',Auth::user())
                @can('IsAdmin',Auth::user())
                    {!!Form::menu('Administrador','#','fa fa-users')!!}
                @endcan
                {!!Form::menu('Foto','#','fa fa-users')!!}
            @endcan
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
<!-- END SIDEBAR -->
</div>