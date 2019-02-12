<!DOCTYPE html>
<html>
<head>
  @include('html-config.head')
</head>

<body>
  <div class="container">
    <header class="row">
      @include('layouts.header')
    </header>
    <div class="content">
      <div class="form-group">
        {!! Form::open(['about/{numberInput}' => 'AboutController@multiplyTable']) !!}
        {!!Form::text('numberInput') !!} </br>
        @if($result===NULL)
          Esta wea es nula
        @else
          @foreach ($result as $value)
            {{$value}}</br>
          @endforeach
        @endif

        {!! Form::close() !!}
      </div>


    </div>
    <footer class="row">
      @include('layouts.footer')
    </footer>
  </div>
</body>

</html>
