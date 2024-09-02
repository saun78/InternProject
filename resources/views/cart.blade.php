
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@foreach($data as $cart)   
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Gram</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $cart->name }}</td>
            <td>{{ $cart->gram }}</td>
            <td>{{ $cart->description }}</td>
            <td>{{ $cart->price }}</td>
        </tr>
    </table>
</body>
@endforeach
</html>