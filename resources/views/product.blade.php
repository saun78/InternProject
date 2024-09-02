
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head> 
<body>
    <table>
        <tr><th></th>
            <th>Name</th>
            <th>Gram</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
       
        <form action="{{ route('product',$product->id) }}" method="POST">
            @csrf
        <tr>
            <td><img src="{{ asset("$product->picture") }}" alt="abbc"></td>
            <td>{{ $product->name }}</td>
            <td><input type="number" name="gram" value="{{ $product->gram }}" min="100"></td>
            <td>{{ $product->description }}</td>
            <td>RM{{ $product->price }}</td>
            <td><button type="submit" name="item_id" value="{{ $product->id }}">add to card</button></td>
        </tr>
    </form>
 
    </table>
</body>

</html>