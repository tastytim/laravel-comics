@php
    $nav_links = [
        [
            "text" => "Home",
            "route_name"=>"home.index" 
        ],
        [
            "text"=> "Comics",
            "route_name"=>"comics.index"
        ]
    ];


    $route_name = Request::route()->getName();
@endphp


<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{asset("img/dc-logo.png")}}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

        @foreach($nav_links as $value)
            <li class="nav-item">
            @php
              $active = strtok($route_name, '.') == strtok($value["route_name"], '.');
            @endphp
          <a class="nav-link  {{$active ? 'active' : ''}}" href="{{ route($value['route_name']) }}">{{$value['text']}}</a>
        </li>
        @endforeach
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>