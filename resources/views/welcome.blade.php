<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>
    <h2> Welcome to Home Page</h2>
    <div class="btn btn-info"><a href="{{ route('register') }}" style="text-decoration: none; color: white;"> Register</a></div> 
    <div class="btn btn-success"><a href="{{ route('login') }}" style="text-decoration: none; color: white;"> Login</a></div> 
</body>
</html>