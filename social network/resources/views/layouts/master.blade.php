<!doctype html>
<html>
    <head>
       

        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="{{URL::to('css/main.css') }}">
	     
        
    </head>
    <body>

    @include('includes.header')
         <div class="container">
       		 @yield('content')
             
        </div>
        <script
              src="https://code.jquery.com/jquery-1.12.0.min.js"
              integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8="
              crossorigin="anonymous"></script>
              <script
              src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
              integrity="sha256-HmfY28yh9v2U4HfIXC+0D6HCdWyZI42qjaiCFEJgpo0="
              crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ URL::to('src/js/app.js') }}"></script>
    </body>
</html>
