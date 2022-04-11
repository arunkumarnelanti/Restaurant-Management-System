<html lang="en">
    <head>
        <title>Registration Form || ChefHands...</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <br><br><br>
        <!--login form starts here -->
        <center>
            <div class="wrapper">
                <header>Registration Form</header>
                <form method="post" action="{{route('register-user')}}">
                    @csrf
                    <div class="field fullname">
                        <div class="input-area">
                            <input type="text" placeholder="Full Name" name="fullname" value="{{old('fullname')}}">
                            <div style="color: red;">{{$errors->first('fullname')}}</div>
                        </div>
                    </div>
                    <div class="field username">
                        <div class="input-area">
                            <input type="text" placeholder="User Name" name="username" value="{{old('username')}}">
                            <div style="color: red;">{{$errors->first('username')}}</div>
                        </div>
                    </div>
                    <div class="field email">
                        <div class="input-area">
                            <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}">
                            <div style="color: red;">{{$errors->first('email')}}</div>
                        </div>
                    </div>
                    <div class="field email">
                        <div class="input-area">
                            <input type="number" placeholder="Mobile Number" name="mobile" value="{{old('mobile')}}">
                            <div style="color: red;">{{$errors->first('mobile')}}</div>
                        </div>
                    </div>
                    <div class="field password">
                        <div class="input-area">
                            <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                            <div style="color: red;">{{$errors->first('password')}}</div>
                        </div>
                    </div>
                    <input type="submit" name="register" value="REGISTER">
                </form>
                <div class="signin-link">Having Account <a href="index">Sign in</a></div>
            </div>
        </center>
        <!--login form ends here -->
    </body>
</html>