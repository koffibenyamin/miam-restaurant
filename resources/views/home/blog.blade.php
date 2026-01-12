<!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Our <span>Menu</span> </h1>
                        <ul >                           
                            
                            @foreach($data as $data)
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms" style="height: 260px">
                                <div class="blog-img" style="display: flex; flex-direction: column;">
                                    <p style="background: whitesmoke; margin-top: auto;">{{$data->price}} FCFA</p>

                                    <img src="food_img/{{$data->image}}" alt="blog-img">
                                </div>
                                <div class="content-right" style="display: flex; flex-direction: column;">
                                    <h3>{{$data->title}}</h3>
                                    <p>{{$data->detail}}</p>
                                    <form action="{{url('add_cart', $data->id)}}" method="post" class="pull-right" style="display:inline-flex; margin-top: auto;">
                                        @csrf
                                        <input type="number" name="qty" min="1" value="1" required>
                                        <input class="btn btn-default" type="submit" value="Add">
                                    </form>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->