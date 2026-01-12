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
        <h1>Reservations</h1>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title" style="text-align:center;">Phone Number </th>
                            <th class="column-title" style="text-align:center;">Number of Guests </th>
                            <th class="column-title" style="text-align:center;">Date and time </th>
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
                            
                            <td class=" " style="vertical-align: middle;  text-align:center;">{{$data->phone}}</td>
                            <td class=" " style="vertical-align: middle; text-align:center;">{{$data->guest}} </td>
                            <td class="a-left " style="vertical-align: middle;  text-align:center;">{{ \Carbon\Carbon::parse($data->date)->format('j M  Y') }} -- {{ $data->time}}</td>                            
                                                        
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

        @include('admin.footer')      

        
      </div>
    </div>

    @include('admin.js')
	
  </body>
</html>
