<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Address</h2>
        <form method="POST" action="/useraddress" >
            @csrf
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" required>
                @error('address')
                {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" required>
            </div>
            @error('city')
            {{ $message }}
            @enderror
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" required>
            </div>
            @error('state')
            {{ $message }}
            @enderror
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input type="number" name="postcode" required>
            <div class="form-group">
                @error('postcode')
                {{ $message }}
                @enderror
                <button type="submit">ADD</button>
            </div>
        </form>
    </div>
    <div>
        <ul>
            <li>
                
            </li>
        </ul>
    </div>
    @foreach ($data as $address)
    <table>
        <tr>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postcode</th>
        </tr>
        <tr>
            <td>{{ $address ->address }}</td>
            <td>{{ $address ->city }}</td>
            <td>{{ $address ->state }}</td>
            <td>{{ $address ->postcode }}</td>
        </tr>
    </table>
    @endforeach
</body>
</html>