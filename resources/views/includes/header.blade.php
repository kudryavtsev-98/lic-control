<header class="py-3 border-bottom">
  {{-- <div class="container">
    <div class="d-flex justify-content-between">

      <div>
        <a href="{{ route('start') }}">
          Главная
        </a>
      </div>

      <div>
        <a href="{{ route('licenses') }}">
          Лицензии
        </a>
      </div>

      <div>
        <a href="{{ route('products') }}">
          Продукты
        </a>
      </div>

      <div>
        <a href="{{ route('versions') }}">
          Версии
        </a>
      </div>

      <div>
        <a href="{{ route('purchases') }}">
          Закупки
        </a>
      </div>

      <div>
        <a href="{{ route('dealers') }}">
          Дилеры
        </a>
      </div>
  
      <div>
        <a href="{{ route('vendors') }}">
          Вендоры
        </a>
      </div>

      <div>
        <a href="{{ route('reports') }}">
          Отчеты
        </a>
      </div>

      <div>
        <a href="{{ route('login') }}">
          Вход
        </a>
      </div>
  
    </div>
  </div> --}}

  
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('start') }}">
        {{ __('LicControl') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item disabled">
            <a href="{{ route('start') }}" class="nav-link {{ active_link('start') }}" aria-current="page" >
              {{ __('Главная') }}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('licenses') }}" class="nav-link {{ active_link('licenses*') }}" aria-current="page">
              {{ __('Лицензии') }}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('products') }}" class="nav-link {{ active_link('products*') }}" aria-current="page">
              {{ __('Продукты') }}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('reports') }}" class="nav-link {{ active_link('reports*') }}" aria-current="page">
              {{ __('Отчеты') }}
            </a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ active_link('login') }}" href="{{route('login')}}">
              {{ __('Вход') }}
            </a>
          </li>
        </ul>
        {{-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
  


</header>