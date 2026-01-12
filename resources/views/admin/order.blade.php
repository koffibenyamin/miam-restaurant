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
            <h1>Orders</h1>
        <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">                            
                            <th class="column-title">Name </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Address </th>
                            <th class="column-title">Food Title</th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title">Price </th>
                            <th class="column-title">Image </th>
                            <th class="column-title">Status </th>


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
                            <td class=" " style="vertical-align: middle;">{{$data->name}}</td>
                            <td class=" " style="vertical-align: middle;">{{$data->phone}} </td>
                            <td class=" " style="vertical-align: middle;">{{$data->email}}</td>
                            <td class=" " style="vertical-align: middle;">{{$data->adress}}</td>

                            <td class=" " style="vertical-align: middle;">{{$data->title}}</td>
                            <td class=" " style="vertical-align: middle;">{{$data->quantity}}</td>


                            <td class="a-left " style="vertical-align: middle;">{{$data->price}} FCFA</td>                            
                            <td class=" ">
                                <img src="food_img/{{$data->image}}" width="50" alt="">
                            </td>
                            <td class=" " style="vertical-align: middle;">{{$data->delivery_status}}</td>
                            
                            
                            <td class="" style="vertical-align: middle;">
                                <a class="btn btn-info" href="{{url('order_in_progress',$data->id)}}" onclick="return confirm('Are you sure to change this?')">On the way</a>
                                <a class="btn btn-success" href="{{url('order_delivered',$data->id)}}" onclick="return confirm('Are you sure to change this?')">Delivered</a>
                                <a class="btn btn-danger" href="{{url('order_cancel',$data->id)}}" onclick="return confirm('Are you sure to change this?')">Cancel</a>


                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
        </div>

        @include('admin.footer')      

        
      </div>
    </div>

    @include('admin.js')
	
  </body>
</html>
