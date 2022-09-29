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
				  <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
				  <!-- <li class="nav-item"><a href="attorneys.html" class="nav-link">stories</a></li> -->
				  <li class="nav-item "><a href="/bride" class="nav-link">Bride</a></li>
				  <li class="nav-item"><a href="/groom" class="nav-link">Groom</a></li>
				  <li class="nav-item "><a href="/venue" class="nav-link">Venue</a></li>
				  <!-- <li class="nav-item"><a href="case.html" class="nav-link">Case Studies</a></li> -->
				  {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
				  <li class="nav-item active"><a href="/contact" class="nav-link">Contact</a></li>
				  <li class="nav-item cta"><a href="#" class="nav-link">My Package</a></li>
				</ul>
			  </div>
			</div>
	  </nav>

	  @stop
    <!-- END nav -->
    @section ('header')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/last\ page.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    @stop


    @section('content')
   	
   	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Salah Aldeen street, Aqaba, Jordan</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+962 779065264</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">Amour@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">Amour.com</a></p>
          </div>
        </div>
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
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
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

   @stop