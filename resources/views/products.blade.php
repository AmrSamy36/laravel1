<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>products</h4>
    @foreach ($products as $products)
    <a href="{{route('show',['id'=>$products['id']])}}" style="display: block;"> {{ $products["name"] }}</a>
    @endforeach
</body>

</html>