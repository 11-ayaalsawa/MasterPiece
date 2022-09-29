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
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <!-- <li class="nav-item"><a href="attorneys.html" class="nav-link">stories</a></li> -->
	          <li class="nav-item"><a href="/bride" class="nav-link">Bride</a></li>
			  <li class="nav-item"><a href="/groom" class="nav-link">Groom</a></li>
			  <li class="nav-item"><a href="/venue" class="nav-link">Venue</a></li>
	          <!-- <li class="nav-item"><a href="case.html" class="nav-link">Case Studies</a></li> -->
	          {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
	       
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav me-auto">

				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ms-auto">
					<!-- Authentication Links -->
					@guest
						@if (Route::has('login'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							
							</li>
						@endif

						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
					<li class="nav-item cta"><a href="#" class="nav-link">My Package</a></li>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									
									@csrf
								</form>

							</div>
						</li>
					@endguest
				</ul>
			</div>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/pexels-photo-2959192.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">Welcome To Amour</h2>
          	<h1>We Are Always Here For Your 
						  <span
						     class="txt-rotate"
						     data-period="2000"
						     data-rotate='[ "Comfort.", " Happiness.", "Dream.", "Happiness." ]'></span>
						</h1>
            <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
            <p class="mb-4">We have delighted hundreds of couples to have an unforgettable day so that their wedding anniversary remains a source of happiness for life</p>
            <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Get Your Reservation <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 py-5">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Services</span>
	            <h2 class="mb-4">Why Select Us?</h2>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your.</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Free Consultation</a></p>
	          </div>
    			</div>
    			<div class="col-lg-9 services-wrap px-4 pt-5">
    				<div class="row pt-md-3">
    					<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="flaticon-lawyer"></span>
		    					</div>
		    					<div class="text">
		    						<h3>Fight for Justice</h3>
		    						<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
		    				</div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="flaticon-lawyer"></span>
		    					</div>
		    					<div class="text">
		    						<h3>Best Case Strategy</h3>
		    						<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
		    				</div>
		    			</div>
		    			<div class="col-md-4 d-flex align-items-stretch">
		    				<div class="services text-center">
		    					<div class="icon d-flex justify-content-center align-items-center">
		    						<span class="flaticon-lawyer"></span>
		    					</div>
		    					<div class="text">
		    						<h3>Experienced Attorney</h3>
		    						<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
		    					</div>
		    					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
		    				</div>
		    			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb  mt-5 pt-5">
    	<div class="container  mt-5 pt-5">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/Wedding\ 1.jpg);">
    					<a href="https://vimeo.com/72335014" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to AMOUR</span>
		            <h2 class="mb-4">We Are Here To Make Your Wedding Night Unforgettable</h2>
		            <p>From the stories of princesses in the world of Disney we will make your wedding night a night of dreams.</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Working hard, accurately and skillfully until we achieve the desired goal, which is the happiness of the spouses and provide them with an atmosphere full of joy and happiness on the night of life.
										</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>
											To become the first choice for every couple who aspires to have the perfect wedding night.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>We offer the best offers so that we hope to always meet the expectations of our customers and guests and guarantee them a good night full of joy and fun.</p>
									  </div>
									</div>
								</div>
		            <div class="years d-flex mt-4 mt-md-5">
		            	<h4>
			            	<span class="number mr-2" data-number="40">0</span>
				            <span>Years of Experienced</span>
			            </h4>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section ftco-animate">
          	<span class="subheading">Our Categories</span>
            <h2 class="mb-4">100+ Of Choices Are Waiting For You </h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<div class="carousel-case owl-carousel ftco-owl">
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/Bride\ 2.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="/bride">Bride</a></h3>
		        				<!-- <span>Corporate</span> -->
		        			</div>
		        		</div>
              </div>
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/Groom\ c.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="/groom">Groom</a></h3>
		        				<!-- <span>Corporate</span> -->
		        			</div>
		        		</div>
              </div>
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/Place\ c.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="/venue">Venue</a></h3>
		        				<!-- <span>Corporate</span> -->
		        			</div>
		        		</div>
              </div>
              <!--<div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/case-4.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="#">Legal Seperation</a></h3>
		        				<span>Corporate</span>
		        			</div>
		        		</div>
              </div> -->
            </div>
        	</div>
        	<!-- <div class="col-md-12 text-center mt-4">
        		<a href="case.html" class="btn btn-primary px-5">See All Successful Cases</a>
        	</div> -->
        </div>
    	</div>
    </section>




    <section class="ftco-section testimony-section mt-2 pt-3">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">I was incredibly happy with the event and so impressed that you understood what I wanted . </p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(https://cdn.discordapp.com/attachments/964244406838370324/1024916950306009138/test_1_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Lovely Couple</p>
		                    <span class="position">Rupi Kaur</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Choosing Amour was one of the best decisions that we made through our entire wedding process.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(https://cdn.discordapp.com/attachments/964244406838370324/1024916991305326622/test_2_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Lovely Couple</p>
		                    <span class="position">Nicky & Lee</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Words cannot thank you enough for all that you have done for us.We appreciated what you have done!</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(https://cdn.discordapp.com/attachments/964244406838370324/1024917054479941663/test_3_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Lovely Couple</p>
		                    <span class="position">Alim & Kevin</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">We can’t thank you enough for being such a huge part of our day and making it all come together.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(https://cdn.discordapp.com/attachments/964244406838370324/1024917078882385920/test_4_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Lovely Couple</p>
		                    <span class="position">Robyn & Mike</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
			
            </div>
          </div>
        </div>
      </div>
    </section>
{{-- 
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text px-4 py-4">
          			<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
          		</div>
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">18</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">October</span>
              		</div>
              	</div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text px-4 py-4">
          			<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
          		</div>
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">18</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">October</span>
              		</div>
              	</div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text px-4 py-4">
          			<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
          		</div>
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">18</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">October</span>
              		</div>
              	</div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
		



    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">ِAMOUR<span>Love is in every corner</span></a></h2>
              <p>From the stories of princesses in the world of Disney we will make your wedding night a night of dreams.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/weddingplanner1"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/theweddingplannerbridalshop/?_rdc=1&_rdr"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/explore/tags/weddingplanner/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          {{-- <div class="col-md">
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
          </div> --}}
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Salah Aldeen street, Aqaba, Amman, Jordan</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+962799036572</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Amour@gmail.com</span></a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Creared by AMOUR family | This website is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Aya AlSawa</a>
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