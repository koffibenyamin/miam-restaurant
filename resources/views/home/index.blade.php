<!DOCTYPE html>
<html class="no-js">
	<head>
        @include('home.css')
        
        <style>
          
        </style>
		
	
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/head.jpg" alt="">
    </section>

    <!-- header start -->
	@include('home.header')
    <!-- header close -->

    

    <!-- about start -->
    @include('home.about')
    <!-- about close -->

    <!-- blog start -->
    @include('home.blog')
    <!-- blog close -->

   
    <!-- CONTACT US  start -->
    @include('home.contact')
    <!-- #contact-us close -->

    

    <!-- footer-bottom  start -->
    @include('home.footer-bottom')
    <!-- footer-bottom  close -->

    @include('home.js')
	</body>
</html>