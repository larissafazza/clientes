<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Store's Management</title>

      <!-- Bootstrap -->
        <link rel="icon" href="images/icon.jpg" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

      <!-- Icons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
                
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/clients.css') }}" rel="stylesheet">
      <link href="{{ asset('css/sellers.css') }}" rel="stylesheet">
    </head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('clients.index') }}">Clients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('sellers.index') }}">Sellers</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <body>
        @yield('content')
    </body>
</html>

<script>

function newPhoneInput(){

  var newInput = document.createElement('input');
  newInput.type = 'text';
  newInput.name = 'newphone';
}

</script>