<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@foreach($data as $product)   
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Gram</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->gram }}</td>
            <td>{{ $product->price }}</td>
        </tr>
    </table>
</body>
@endforeach
</html>