<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if(Auth::check())
        <a href="{{ url('home') }}" class="navbar-brand" href="#">LARADSI</a>
      @else
        <a href="{{ url('/') }}" class="navbar-brand" href="#">LARADSI</a>
      @endif
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::check())
        <ul class="nav navbar-nav navbar-left">
          <li @if(session('section') == 'article')  class="active" @endif> <a href="{{ url('article') }}">Artículos</a></li>
          <li @if(session('section') == 'category') class="active" @endif> <a href="{{ url('category') }}">Categorías</a></li>
        </ul>
      @endif

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
          <li><a href="{{ route('register') }}">Registrarse</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        @endif
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>