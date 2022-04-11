<html lang="en">
    <head>
    <title>Add Restaurent || ChefHands...</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
    <p id="goback"><a href="Home">HOME</a></p>
        <br><br>
        <center>
            <div class="wrapper">
            <p id="section">Add Restaurants</p>
                <form method="POST" action="{{route('add-restaurant')}}">
                    @csrf
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Restaurent Name" name="restaurent" value="{{old('restaurent')}}">
                            <div style="color: red;">{{$errors->first('restaurent')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Location" name="location" value="{{old('location')}}">
                            <div style="color: red;">{{$errors->first('location')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Owner Name" name="owner" value="{{old('owner')}}">
                            <div style="color: red;">{{$errors->first('owner')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="number" placeholder="Contact Number" name="mobile" value="{{old('mobile')}}">
                            <div style="color: red;">{{$errors->first('mobile')}}</div>
                        </div>
                    </div>
                    <input type="submit" name="add" value="ADD RESTAURENT">
                </form>
            </div>
        </center>
    </body>
</html>