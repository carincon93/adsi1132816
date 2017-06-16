<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  </head>

  <style>
    textarea, input, select {
      margin-bottom: 0.5rem;
      width: 100%;
    }
    button.btn {
      margin-bottom: 0.5rem;
    }
  </style>
  <body>

  @include('layout-app.navbar')
	<div class="container">
		@yield('content')
	</div>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
    $(document).ready(function() {

      $('form').on('click', '.btn-delete', function(event) {
        event.preventDefault();
        if (confirm("Realmente desea eliminar este elemento?")) {
          $(this).parent().submit();

        }
      });

      $('form').on('click', '.btn-upload', function(event) {
        event.preventDefault();
        $('#upload').click();
      });


      $('#name').keyup(function(event) {
        $name = $(this).val();
        $token = $('input[type=hidden]').val();
        // alert($token);
        $.post('/ajaxsearch', {_token: $token, name: $name}, function(data) {
          $('.tbody').html(data);
        })
      });
    });
  </script>
  </body>
</html>