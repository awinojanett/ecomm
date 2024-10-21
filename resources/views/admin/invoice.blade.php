<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
        <h3>Name: {{$data->name}}</h3>
        <h3>Address: {{$data->address}}</h3>
        <h3>Phone: {{$data->phone}}</h3>
        <h3>Product: {{$data->product->name}}</h3>
        <h3>Price (Ksh): {{$data->product->price}}</h3>
        <img height="100" width="150" src="products/{{$data->product->image}}">
 
</body>
</html>