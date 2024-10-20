<!DOCTYPE html>
<html>

<head>
@include('home.css')

<style type="text/css">
    .div-deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px;
    }
    table
    {
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }
    th
    {
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: black;
    }
    td
    {
        border: 1px solid black
    }
    .cart-value
    {
        text-align: center;
        margin-bottom: 50px;
        padding: 15px;
    }
</style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    
  </div>
  <!-- end hero area -->

   <div class="div-deg">
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Remove</th>
        </tr>

        <?php

        $value=0;

        ?>
       
        @foreach ($cart as $cart)
        
        <tr>
            <td>{{$cart->product->name}}</td>
            <td>{{$cart->product->price}}</td>
            <td>
                <img width="100" src="/products/{{$cart->product->image}}">
            </td>
            <td>
                <a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}">Remove</a>
            </td>
        </tr>

        <?php

        $value=$value + $cart->product->price;

        ?>
            
        @endforeach
        
    </table>
   </div>

   <div class="cart-value">
    <h3>Total value of cart is: Ksh {{$value}}</h3>
   </div>



  <!-- info section -->

 @include('home.footer')

</body>

</html>