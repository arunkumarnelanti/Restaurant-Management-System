<html lang="en">
    <head>
        <title>Login Form || ChefHands...</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <br><br><br><br>
        <!--login form starts here -->
        <center>
            <div class="wrapper">
                <header>Sign in</header>
                <form method="post" action="{{route('login-user')}}">
                    @csrf
                    <div class="field email">
                        <div class="input-area">
                            <input type="text" placeholder="Email Address" name="email" value="{{old('email')}}">
                        </div>
                        <div style="color: red;">{{$errors->first('email')}}</div>
                    </div>
                    <div class="field password">
                        <div class="input-area">
                            <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                        </div>
                        <div style="color: red;">{{$errors->first('password')}}</div>
                    </div>
                    <input type="submit" name="login" value="LOGIN">
                </form>
                <div class="signup-link">Not having Account? <a href="Register">Sign up</a></div>
            </div>
        </center>
        <!--login form ends here -->
    </body>
</html>