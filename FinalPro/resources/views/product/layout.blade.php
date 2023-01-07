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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">PRODUCT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      
      @if(auth()->user())
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" type="get" action="/product/search{query}">
      <input class="form-control mr-sm-2" type="search" name="query" placeholder="SearchProducts" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container">
        @yield('content')
    </div>
    
</body>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/"> AvantikaNepal</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>