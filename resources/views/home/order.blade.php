<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @include('home.css')
    <style>
        .table-deg
        {
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header') 

        <div class="table-deg">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col"> Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delivery Status</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>

                @foreach ($order as $order)
                <tbody>
                  <tr>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <img height="80" width="80" src="products/{{$order->product->image}}">
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>

    @include('home.footer')
</body>
</html>