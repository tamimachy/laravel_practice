<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Login Page</h3>
                @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
                </div>
                @endif
                <form action="/loginSave" method="post">
                    @csrf
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
                    <button type="submit" class="btn btn-primary"> Login </button> 
                    <button class="btn btn-primary"><a href="{{ route('home') }}" style="text-decoration: none; color: white;"> Back </a></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>