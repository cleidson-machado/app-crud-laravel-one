<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Creation</title>
</head>
<body>
    <h1>Edit a PRODUCT</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.updateOne', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">NAME:</label>
            <input type="text" name="name" placeholder="Type a Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="qty">QUANTITY:</label>
            <input type="text" name="qty" placeholder="Type a Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="price">PRICE:</label>
            <input type="text" name="price" placeholder="Type a Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="description">DESCRIPTION:</label>
            <input type="text" name="description" placeholder="Type a Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="UPDATE One">
        </div>
    </form>
</body>
</html>