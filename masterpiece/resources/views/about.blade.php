
@extends('layouts.master')

@section('nav')
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
    @stop
    <!-- END nav -->

    @section('header')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/pexels-photo-1589830.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    @stop


    @section('content')
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb  my-5 py-5">
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
    <br>
    <br>
    <br>
		<section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img my-5 py-5" style="background-image: url(images/contact.jpg);">
			<div class="overlay  "></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Send a message to</span>
    				<h2 class="mb-4">Our wedding planner </h2>
    				<form action="#" class="consultation">
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Your Name">
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Your Email">
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Subject">
	            </div>
	            <div class="form-group">
	              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
	            </div>
	          </form>
    			</div>
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

    @stop

   