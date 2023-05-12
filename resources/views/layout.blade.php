<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hotel Management</title>
    <style>
      *{
      font-size: 18px;
      font-family: Arial;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand mb-0 h1" href="<?= url(''); ?>"style='font-size: 18px;'>Hotel Management Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?= url(''); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= url('about'); ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('rooms.index') }}">Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.create') }}">Add new client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.index') }}">Records</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="{{ route('currentClients.index') }}">Current Clients</a>
              </li>
			  
			  
          </ul>
        </div>
      </nav>

      @if (session()->has('status'))
          <div class="alert alert-success" role="alert">
              {{ session()->get('status') }}
          </div>
      @endif

  

    <div class="container p-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>