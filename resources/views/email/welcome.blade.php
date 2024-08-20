<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to our application</h1>
    <p>we are glad to have you with us.</p>
    <a href="{{ route('login') }}">click here to login your account </a>
     <p>{{ $user->otp }}</p>
</body>
</html>