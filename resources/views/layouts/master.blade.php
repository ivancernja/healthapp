<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Evidencija zdravstvenih kartona</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('home') }}">Kartoni</a>
      </div>
      <div class="nav navbar-nav navbar-right">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('kartoni.index') }}">Kartoni</a></li>
      </div>
    </div>
  </nav>

<main>
    <div class="container">
        @yield('content')
    </div>

    <div class="create">
      @yield('create')
    </div>
</main>

</body>
</html>
