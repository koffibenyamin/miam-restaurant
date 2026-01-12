<!DOCTYPE html>
<html lang="en">
  <head>

  
    
  <style>
    .link{
        color: white;
        border-radius: 5px;
        padding: 2px;

    }

    .update_link{
        background: #1ABB9C;
    }

    .delete_link{        
        background: red;        
    }
  </style>

  

  @include('admin.css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        

        @include('admin.sidebar')

        @include('admin.header')
        
        <!-- page content -->
        <div class="right_col" role="main">

        <div class="x_content">
            
        <h1>All Foods</h1>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Food </th>
                            <th class="column-title">Details </th>
                            <th class="column-title">Price </th>
                            <th class="column-title">Image </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $data)
                          <tr class="even pointer">
                            <td class="a-center " style="vertical-align: middle;">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" " style="vertical-align: middle;">{{$data->title}}</td>
                            <td class=" " style="vertical-align: middle;">{{$data->detail}} </td>
                            <td class="a-left " style="vertical-align: middle;">{{$data->price}} FCFA</td>                            
                            <td class=" ">
                                <img src="food_img/{{$data->image}}" width="100" alt="">
                            </td>
                            
                            <td class="" style="vertical-align: middle;">
                                <a class="link update_link" href="{{url('update_food',$data->id)}}" >Update</a>

                                <a class="link delete_link" href="{{url('delete_food',$data->id)}}" onclick="return confirm('Are you sure to delete this')">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
        

        </div>

        @include('admin.footer')      

        
      </div>
    </div>

    @include('admin.js')
	
  </body>
</html>
