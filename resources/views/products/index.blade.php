<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Page</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
            <div>
                <h1 style="color: blue">{{session('success')}}</h1>
            </div>
        @endif
    </div>
    <div>Index</div>
    <h1>YOU ARE THE BEST MDF EVER!! BRO!!!</h1>
    <h3>Table of PRODUCTS</h3>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>QTY</td>
            <td>PRICE</td>
            <td>DESCRIPTION</td>
            <td>FUNC-EDIT</td>
            <td>FUNC-DELETE</td>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.editOne', ['product' => $product])}}">EDIT-LINK</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product'=> $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>