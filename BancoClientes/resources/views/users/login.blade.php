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
                <a class="nav-link" aria-disabled="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-current="page" href="{{ route('clients.index') }}">Clients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="{{ route('sellers.index') }}">Sellers</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <body>
    <div class="body-container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('danger'))
      <div class="alert alert-danger">
        {{ session('danger') }}
      </div>
    @endif
    <form class="form" action="{{ route('users.auth') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="password" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Login</button>
    </form>
</div>
    </body>
</html>