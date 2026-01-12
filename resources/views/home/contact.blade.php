<section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">Book <span>Table</span></h1>
                        <br>
                        <div class="">
                            
                            <form action="{{url('book_table')}}" method="post">
                                @csrf
                                <div class="row mb-5">
                                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                                        <input type="text" class="form-control form-control-lg custom-form-control" placeholder="Phone Number" name="phone">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                                        <input type="number"  class="form-control form-control-lg custom-form-control" placeholder="NUMBER OF GUESTS" max="20" min="0" name="guest">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                                        <input type="time"  class="form-control form-control-lg custom-form-control" placeholder="" name="time">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                                        <input type="date"  class="form-control form-control-lg custom-form-control" placeholder="" name="date">
                                    </div>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-default wow bounceIn animated" value="Find Table">
                            </form>
                        </div>
                    </div>
                    
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section>