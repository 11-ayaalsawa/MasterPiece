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
				  <li class="nav-item active"><a href="/venue" class="nav-link">Venue</a></li>
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
		
	
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contact.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Venue</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Venue <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	@stop


	@section('content')
   	
	<section class="ftco-section">
    	<div class="container">
        <div class="row d-flex justify-content-center">
			@foreach ($data as $item)
        	<div class="col-md-3 text-center">
        		<div class="practice-area ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="{{$item->sub_icone}}"></span>
        			</div>
        			<h3><a href="practice-single.html">{{$item->sub_name}}</a></h3>
        			<p>{{$item->sub_name}}</p>
        			<a href="/shops/id/{{$item->sub_id}}" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
        		</div>
        	</div>
			@endforeach
        
        </div>
    	</div>
    </section>


   @stop