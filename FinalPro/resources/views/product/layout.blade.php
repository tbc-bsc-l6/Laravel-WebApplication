<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Store Management System</title>
    <link href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../product.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        <a class="nav-link" href="/product">Product <span class="sr-only">(current)</span></a>
      </li>
      @else
      <li class="nav-item active">
        <a class="nav-link" href="/productguest">Product <span class="sr-only">(current)</span></a>
      </li>
      @endif
      @if (Route::has('login'))
      @auth
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
      @endif
      @endauth
      @endif
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
<div class="bbb-wrapper fl-wrap">
      <div class="subcribe-form fl-wrap">
                        <p class="text-center">Sign up now to our newsletter
                            
                        </p>
                        <form method="POST" action="/newsletter" id="subscribe" novalidate="true">
                          @csrf
                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                            <button type="submit" id="subscribe-button" class="subscribe-button color-bg"><i class="fa fa-rss"></i> Subscribe</button>
                            <label for="subscribe-email" class="subscribe-message"></label>
                        </form>
                    </div>
                </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/"> AvantikaNepal</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>