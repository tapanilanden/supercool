<!-- NAVI -->
    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('pages.welcome') }}">SCAAPFSCAAI</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class =" {{ Request::url() === route('pages.welcome')? "active" : "" }} "><a href="{{ route('pages.welcome') }}">Home </a></li>
            <li class=" {{ Request::url() === route('collection.index')? "active" : "" }} "><a href="{{ route('collection.index') }}">SCAAIs</a></li>
            <li class=" {{ Request::url() === route('pages.about')? "active" : "" }} "><a href="{{ route('pages.about') }}">WTF is SCAAPFSCAAI?</a></li> 
          </ul>
            
        <!-- LOGIN / KÄYTTÄJÄN TIEDOT -->
        
          <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
              aria-expanded="false">Hello, {{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="{{ route('scaais.index') }}">My SCAAIs</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </li>
            @else
                <li class="active"><a href="{{ route('login') }}" class="btn btn-success">Login</a></li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <!-- NAVI LOPPUU -->