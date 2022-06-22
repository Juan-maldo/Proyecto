

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">EASY MUSIC REGA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Guitarras<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Guitarras-Electricas">Guitarras Electricas</a></li>
          <li><a href="Guitarras-Acusticas">Guitarras Acusticas</a></li>
          <li><a href="Cuerdas">Cuerdas</a></li>
          <li><a href="Pluminas">Pluminas</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Acordeones<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Acordeones Botones">Acordeones Botones</a></li>
          <li><a href="Acordeones Teclado">Acordeones Teclado</a></li>
          <li><a href="Accesorios">Accesorios</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teclados<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Teclados-Digitales">Teclados-digitales</a></li>
          <li><a href="Teclados-Acusticos">Teclados-Acusticos</a></li>
          <li><a href="Teclados-Portatiles">Teclados portatiles</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Iluminacion<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="LucesLED">Luces LED</a></li>
          <li><a href="LetrasdeLuz">Letras de luz</a></li>
          <li><a href="Lasers">Lasers </a></li>
        </ul>
      </li>
      <li><a href="carrito">carrito</a></li>
    </ul>
    @guest
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
    @endguest
    @auth
    <form action="/logout" method="POST" style="display: inline">
      @csrf
    <li><a href="#" onclick="this.closest('form').submit()"><span class="glyphicon glyphicon-log-out"></span>Cerrar Sesión</a></li>

    </form>    
    @endauth
  </ul>
    

    

    
  </div>
</nav>

