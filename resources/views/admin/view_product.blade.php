<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div-design
        {
            padding: 50px;
        }
        .div-design thead th
        {
            background-color: white;
            color: black;
        }
        input[type='search']
        {
            width: 200px;
            height: 40px;
            margin-left: 50px;
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
            <form action="{{url('product_search')}}" method="get">
                @csrf
                <input type="search" name="search" placeholder="Search Product">
                <input type="submit" class="btn btn-secondary" value="Search">

            </form>
            <div class="div-design">
                    <table class="table table-bordered table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>

                    @foreach ($product as $products)
                    <tr>
                        <td>{{$products->name}}</td>
                        <td>{!!Str::limit($products->description,50)!!}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>
                            <img height="50" width="50" src="products/{{$products->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
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