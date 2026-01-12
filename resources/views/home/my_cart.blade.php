<!DOCTYPE html>
<html class="no-js">
	<head>
        @include('home.css')
              
		
	
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/header.jpg" alt="">
    </section>

    <!-- header start -->
	@include('home.header')
    <!-- header close -->

    <!-- price start -->
    
<section id="price">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">your <span>Cart</span> </h1>
                        
                        <div class="pricing-list">
                            <ul>
                                <?php 
                                    $total_price = 0;
                                ?>
                                @foreach($data as $data)
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">                                   
                                    
                                        <div class="item">
                                            <img src="food_img/{{$data->image}}" width="100px" alt="blog-img">
                                            <div class="item-title" >
                                                <h2>{{$data->title}}</h2>
                                                <div class="border-bottom"></div>
                                                

                                                <span> 
                                                    {{$data->price / $data->quantity}} FCFA X {{$data->quantity}} = {{$data->price}} FCFA                                               
                                                </span>

                                                <?php 
                                                    $total_price = $total_price + $data->price;
                                                ?>
                                                
                                                
                                            </div>

                                            <a class="" style="color: #FF5333;" href="{{url('remove_cart',$data->id)}}" onclick="return confirm('Are you sure to remove this?')">Remove</a>
                                        </div>                                    
                                </li>
                                @endforeach
                                
                            </ul>
                            <div class="pull-left">
                            <h1 class="heading ">
                                Total =<span> {{$total_price}} FCFA</span>
                                
                            </h1>
                            <br>


                            <form action="{{url('confirm_order')}}" method="post">
                                @csrf

                            <div class="form-group wow fadeInDown " >
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{Auth()->user()->name}}">
                            </div>

                            <div class="form-group wow fadeInDown" >
                                <label for="">Email</label>
                                <input type="email" class="form-control"  name="email" value="{{Auth()->user()->email}}">
                            </div>

                            <div class="form-group wow fadeInDown" >
                                <label for="">Phone</label>
                                <input type="number" class="form-control" name="phone" value="{{Auth()->user()->phone}}">
                            </div>
                            
                            <div class="form-group wow fadeInDown" >
                                <label for="">Adress</label>
                                <input type="text" class="form-control" name="adress" required>
                            </div>

                            <input class="btn wow bounceIn" type="submit" value="Confirm Order">
                        </form>
                            </div>

                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->

    <!-- price close -->
   
    

    <!-- footer  start -->
    @include('home.footer')
    <!-- #footer close -->

    <!-- footer-bottom  start -->
    @include('home.footer-bottom')
    <!-- footer-bottom  close -->

    @include('home.js')
	</body>
</html>