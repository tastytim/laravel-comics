<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include("partials/header_scripts") 

    <title>@yield('page_title')</title>

    
</head>
<body> 
  @include("partials/header")

     <main>
     <div class="container">
      @yield('content')
     </div>
    

     </main>
    @include('partials/scripts')
</body>

  @include("partials/footer")
  
  
</html>
