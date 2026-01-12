<!DOCTYPE html>
<html lang="en">
  <head>
    
    <base href="/public">
    @include('admin.css')
    
    <style>
        label
        {
            display: inline-block;
            width:200px
        }

        .div_deg 
        {
            padding: 10px;
            
        }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        @include('admin.sidebar')

        @include('admin.header')
        
        <!-- page content -->
        <div class="right_col" role="main">

        <h1>Update Food</h1>

        <form action="{{url('edit_food',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="div_deg">
                <label for="">Food Title</label>
                <input type="text" name="title" id="" value="{{$data->title}}" required>
            </div>
            <div class="div_deg">
                <label for="">Food details</label>
                <textarea name="details" cols="50" rows="5" id=""  required>{{$data->detail}}</textarea>
            </div>
            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price" id="" value="{{$data->price}}" required>
            </div>
            <div class="div_deg" style="display:flex;">
                <label for="img">Current Food Image</label>
                <img src="food_img/{{$data->image}}" width="100px" alt="">
                                
            </div>
            <div class="div_deg" style="display:flex;">
                <label for="img">Change Food Image</label>
                
                <input type="file" name="img" id="">
                
            </div>
             <div class="div_deg">
                <input type="submit" value="Update Food" class="btn btn-warning">
            </div>
            


        </form>

        
        </div>

        @include('admin.footer')      

        
      </div>
    </div>

    @include('admin.js')
	
  </body>
</html>
