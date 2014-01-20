@if (!Request::is( 'encuesta'))
    <nav id="sidebar" class="sidebar nav-collapse collapse">
        <ul id="side-nav" class="side-nav">
            <li class="{{ Request::is( '/') ? 'active' : '' }}">
                <a href="/"><i class="fa fa-home"></i> <span class="name">Inicio</span></a>
            </li>
        </ul>
        <ul id="side-nav" class="side-nav">
            <li class="{{ Request::is( 'admin/usuarios') ? 'active' : '' }}">
                <a href="/admin/usuarios"><i class="fa fa-group"></i> <span class="name">Usuarios</span></a>
            </li>
        </ul>
    </nav>
@endif
