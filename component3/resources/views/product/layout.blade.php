<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Store Management System</title>
    <link href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../product.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand">CRUD FUNCTIONALITY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        @yield('content')
    </div>
    
</body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">@ 2022, Copyright reserved AvantikaN! <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
</html>