<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AMOUR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/package.css') }}">
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">AMOUR <span></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item  active"><a href="/about" class="nav-link">About</a></li>
            <!-- <li class="nav-item"><a href="attorneys.html" class="nav-link">stories</a></li> -->
            <li class="nav-item"><a href="/bride" class="nav-link">Bride</a></li>
        <li class="nav-item"><a href="/groom" class="nav-link">Groom</a></li>
        <li class="nav-item"><a href="/venue" class="nav-link">Venue</a></li>
            <!-- <li class="nav-item"><a href="case.html" class="nav-link">Case Studies</a></li> -->
            {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="#" class="nav-link">My Package</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contact.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
              <h1 class="mb-3 bread">Package</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Package <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>
      <div class="px-4 px-lg-0">
        <!-- For demo purpose -->
        {{-- <div class="container text-white py-5 text-center">
          <h1 class="display-4">Bootstrap 4 shopping cart</h1>
          <p class="lead mb-0">Build a fully structred shopping cart page using Bootstrap 4. </p>
          <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
                  <u>Bootstrapious</u></a>
          </p>
        </div> --}}
        <!-- End -->
      
        <div class="pb-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      
                <!-- Shopping cart table -->
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-light">
                          <div class="p-2 px-3 text-uppercase">Permits</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Remove</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items as $item)
                          
                      
                      <tr>
                        <th scope="row" class="border-0">
                          <div class="p-2">
                            <img src="{{$item[0]->product_img}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$item[0] ->product_name}}</a></h5>
                              {{-- <span class="text-muted font-weight-normal font-italic d-block">{{$item[0]->product_description}}</span> --}}
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>{{$item[0] ->product_price}}</strong></td>
                        <td class="border-0 align-middle"><strong>1</strong></td>
                        <td class="border-0 align-middle"><a href="/delete_item/id/{{$item[0] ->product_id}}" class="text-dark"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      @endforeach
                      {{-- <tr>
                        <th scope="row">
                          <div class="p-2">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Week Ticket</a></h5><span class="text-muted font-weight-normal font-italic">Valid Until 07/09/2019</span>
                            </div>
                          </div>
                        </th>
                        <td class="align-middle"><strong>$29.00</strong></td>
                        <td class="align-middle"><strong>1</strong></td>
                        <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="p-2">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block"></a>Day Ticket</h5><span class="text-muted font-weight-normal font-italic">Valid until 20:00 02/09/2019</span>
                            </div>
                          </div>
                          <td class="align-middle"><strong>$9.00</strong></td>
                          <td class="align-middle"><strong>1</strong></td>
                          <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr> --}}
                    </tbody>
                  </table>
                </div>
                <!-- End -->
              </div>
            </div>
      
            <div class="row py-5 p-4 bg-white rounded shadow-sm">
              <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                <div class="p-4">
                  <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                  <div class="input-group mb-4 border rounded-pill p-2">
                    <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                    <div class="input-group-append border-0">
                      <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                    </div>
                  </div>
                </div>
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                <div class="p-4">
                  <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                  <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                  <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                  <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                      <h5 class="font-weight-bold">$4000.00</h5>
                    </li>
                  </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
      

		

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
      <div class="container">
        <div class="row d-flex justify-content-end">
        	<div class="col-md-8 py-4 px-md-4 bg-primary">
        		<div class="row">
		          <div class="col-md-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            <form action="#" class="subscribe-form">
		              <div class="form-group d-flex">
		                <input type="text" class="form-control" placeholder="Enter email address">
		                <input type="submit" value="Subscribe" class="submit px-3">
		              </div>
		            </form>
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">ِAMOUR<span>Love is in every corner</span></a></h2>
              <p>From the stories of princesses in the world of Disney we will make your wedding night a night of dreams.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Practice Areas</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>