<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Register Page</h3>
                <form action="/submit" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">
                            Name:
                        </label>
                        <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email">
                            Email:
                        </label>
                        <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password">
                            Password:
                        </label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary"> Register </button> 
                    <button class="btn btn-primary"><a href="{{ route('home') }}" style="text-decoration: none; color: white;"> Back </a></button>
                </form>
            </div>
            @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
        </div>
    </div>
    
    
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>