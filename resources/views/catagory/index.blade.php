<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Catagory Page</h1>
    <p>{{$catagory[2]}}</p> 
    <p>{{$catagory[3]}}</p>
    @foreach ($topics as $n)
        <p>{{$n}}</p>
        <p>{{$n}}</p>
    @endforeach
    
    <button><a href="{{route('products.index')}}">Product Button </a></button>
</body>
</html>