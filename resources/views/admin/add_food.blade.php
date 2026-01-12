<!DOCTYPE html>
<html lang="en">
  <head>
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

        <div class="right_col" role="main">
          <h1>Add Food</h1>

        <form action="{{url('upload_food')}}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="div_deg">
                <label for="">Food Title</label>
                <input type="text" name="title" id="" required>
            </div>
            <div class="div_deg">
                <label for="">Food details</label>
                <textarea name="details" cols="50" rows="5" id="" required></textarea>
            </div>
            <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price" id="" required>
            </div>
            <div class="div_deg" style="display:flex;">
                <label for="img">Food image</label>
                <input type="file" name="img" id="" required>
                
            </div>
             <div class="div_deg">
                <input type="submit" value="Add food" class="btn btn-warning">
            </div>
            


        </form>
        </div>

        @include('admin.footer')      

        
      </div>
    </div>

    @include('admin.js')
	
  </body>
</html>
