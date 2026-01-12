<!DOCTYPE html>
<html lang="en">
  <head>
    

    @include('admin.css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        @include('admin.sidebar')

        @include('admin.header')
        
        <!-- page content -->
        <div class="right_col" role="main">
        @include('admin.body')
        </div>

        @include('admin.footer')      

        
      </div>
    </div>

    @include('admin.js')
	
  </body>
</html>
