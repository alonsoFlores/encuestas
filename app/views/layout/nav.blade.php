
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="{{ Request::is( '/') ? 'active' : '' }}">
            <a href="/"><i class="fa fa-home"></i> <span class="name">Inicio</span></a>
        </li>
    </ul>
    <ul id="side-nav" class="side-nav">
        <li class="{{ Request::is( 'encuesta') ? 'active' : '' }}">
            <a href="encuesta"><i class="fa fa-question"></i> <span class="name">Encuesta</span></a>
        </li>
    </ul>
</nav>
