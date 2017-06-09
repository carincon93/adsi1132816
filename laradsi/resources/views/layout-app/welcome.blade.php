<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <style>
      .container-navbar {
        margin-top: 80px;
      }
    </style>
  </head>
  <body>
  @include('layout-app.navbar')

	<div class="container container-navbar">
		@yield('content')
	</div>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
    $(document).ready(function() {
    });
  </script>
  </body>
</html>