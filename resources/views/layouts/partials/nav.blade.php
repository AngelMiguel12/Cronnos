<nav class="main-header navbar navbar-expand-md navbar navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('img/logo.png') }}" alt="logo" title="{{ config('app.name', 'CRUD') }}">
        </a>
        {!! Form::open(['route' => 'trainings.index', 'method' => 'get', 'class' => 'form-inline mr-3 order-md-1']) !!}
        <div class="input-group input-group-sm">
            {!! Form::search('search', request()->input('search'), ['placeholder' => __('Buscar'), 'class' => 'form-control form-control-navbar']) !!}
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        {!! Form::close() !!}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-3 justify-content-between order-md-0" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ url()->current() === route('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">{{ __('Inicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ url()->current() === route('trainings.index') ? 'active' : '' }}"
                       href="{{ route('trainings.index') }}">{{ __('Inventario') }}</a>
                </li>
                @if(isAdmin())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSettings" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ __('Configuraciòn') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownSettings">
                            <a class="dropdown-item {{ url()->current() === route('admin.trainings.index') ? 'active' : '' }}"
                               href="{{ route('admin.trainings.index') }}">{{ __('Crear / Editar Inventario') }}</a>
                            <a class="dropdown-item {{ url()->current() === route('admin.types.index') ? 'active' : '' }}"
                               href="{{ route('admin.types.index') }}">{{ __('Categorias') }}</a>
                            <a class="dropdown-item {{ url()->current() === route('admin.users.index') ? 'active' : '' }}"
                               href="{{ route('admin.users.index') }}">{{ __('Usuarios') }}</a>
                            <a class="dropdown-item {{ url()->current() === route('admin.roles.index') ? 'active' : '' }}"
                               href="{{ route('admin.roles.index') }}">{{ __('Rangos') }}</a>
                               <a class="dropdown-item {{ url()->current() === route('admin.roles.index') ? 'active' : '' }}"
                               href="{{ route('admin.roles.index') }}">{{ __('Agregar imagenes') }}</a>
                               <a class="dropdown-item {{ url()->current() === route('admin.roles.index') ? 'active' : '' }}"
                               href="{{ route('admin.roles.index') }}">{{ __('Agregar videos') }}</a>
                               <a class="dropdown-item {{ url()->current() === route('admin.roles.index') ? 'active' : '' }}"
                               href="{{ route('admin.roles.index') }}">{{ __('Editar tu usuario') }}</a>
                               <a class="dropdown-item {{ url()->current() === route('admin.roles.index') ? 'active' : '' }}"
                               href="{{ route('admin.roles.index') }}">{{ __('Editar imagenes') }}</a>
                        </div>
                    </li>
                @endif
                <li class="nav-item d-block d-md-none">
                    <a class="nav-link" href="{{ route('logout') }}" title="{{ auth()->user()->name }}">
                        <i class="bi bi-door-open"></i>
                        <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"></path>
</svg>
{{ __('Salir') }}
              </button>
                    </a>
                </li>
            </ul>
        </div>
        <a class="logout d-none d-md-block order-md-2" href="{{ route('logout') }}" title="{{ auth()->user()->name }}">
            <i class="bi bi-door-open"></i>
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"></path>
</svg>
{{ __('Salir') }}
              </button>
        </a>
    </div>
</nav>
