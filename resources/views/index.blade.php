<!DOCTYPE html>
<html>
<head>
  @include('html-config.head')
</head>

<body>
  <div class="container">
    <header>
      @include('layouts.header')
      <img class="home-image" src="{{URL::asset('images/home-image.jpg')}}">
    </header>
    <div class="home-image">

    </div>
    <footer>
      @include('layouts.footer')
    </footer>
  </div>
</body>
</html>
