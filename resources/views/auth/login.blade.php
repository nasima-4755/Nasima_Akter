<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter your Email">
        <br>
        <input type="password" name="password" placeholder="Enter your Password">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>