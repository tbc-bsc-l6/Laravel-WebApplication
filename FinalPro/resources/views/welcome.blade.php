@extends('product.layout')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="../welcome.css" rel="stylesheet" type="text/css">
<script src="../welcome.js"></script>
@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif
<!-- Slideshow container -->
<div id="slider">
    <ul id="slideWrap"> 
      <li><img src="../images/uploads/poster1.jpg" alt=""></li>
      <li><img src="../images/uploads/poster2.jpg" alt=""></li>
      <li><img src="../images/uploads/poster3.jpg" alt=""></li>
      <li><img src="../images/uploads/shelf3.jpg" alt=""></li>
      <li><img src="../images/uploads/shelf2.jpg" alt=""></li>
    </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
</div>
<h1>About Us</h1>
<div class="flex-container1">
    <div class="container1">
        <h3>What do we do?</h3>
        <p>We are a website that helps the sellers to perform crud functionalities on the products, The signed in users can perform crud on the products who are known as the admins, There are other users who are non signed in users who can only view the products but
            cannot perform CRUD on products. They can only view the products. There is a third kind of user who is a super admin who can perform CRUD on both productsand users
            In the website you can also subscribe for the newsletter VIA email from the footer. You can aslo register and login in the website to become an admin. but thers is only one Super Admin in the website.
        </p>
        <img src="../images/uploads/1672740469.jpg" alt="">
    </div>
    <div class="container2">
    <img src="../images/uploads/1672740522.jpg" alt="">
    <h3>Our Services:</h3>
    <p>1. CRUD on Products<br>2. CRUD on Users by the Super Admin <br> 3. Non logged in users can view the produts<br> 4. Subscribe to out newsletter.
        </p>
    </div>
</div>
<h1>Contact Us</h1>
<div class="flex-container2">
    <div class="container3">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><style>.mapouter{position:relative;text-align:right;}</style><a href="https://www.embedgooglemap.net">integrate google maps into website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>

    </div>
    <div class="container4">
    <h3>Contact Us:</h3>
<span class="glyphicon glyphicon-envelope">:nisuka84@gmail.com</span><br>
<span class="glyphicon glyphicon-phone">:+977-9839292010</span><br>
<span class="glyphicon glyphicon-map-marker">:TradeTower,Thapathali, Kathmandu</span>

    </div>
    <div class="container5">
        <h3>Pitch Us Your ideas</h3>
        <p>Send us an email on <strong>'nisuka84@gmail.com'</strong> for any kind of collaborations and ideas,</p>
    </div>
</div>
@endsection