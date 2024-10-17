<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div-design
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .table-design
        {
            border: 2px solid whitesmoke;
        }
        th
        {
            background-color: rgb(243, 244, 251);
            color: black;
            font-size: 15px;
            font-weight: bold;
            padding: 15px;
        }
        td{
            border: 1px solid white;
            text-align: center;
            color: white;
        }
        .pagination-deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; 
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="pagination-deg">
                {{$product->onEachSide(1)->links()}}
            </div>
            
            <div class="div-design">
                <table class="table-design">
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($product as $products)
                    <tr>
                        <td>{{$products->name}}</td>
                        <td>{!!Str::limit($products->description,50)!!}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>
                            <img height="120" width="120" src="products/{{$products->image}}">
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                   
                    
                </table>
                
            </div>

          
            </div>
      </div>
    </div>
    
    <!-- JavaScript files-->


    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>