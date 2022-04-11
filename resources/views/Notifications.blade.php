<html lang="en">
    <head>
    <title>Notifications || ChefHands...</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
    <p id="goback"><a href="Home">HOME</a></p>
        <br>
        <center>
            <div class="wrapper">
            <p id="section">Send Notifications</p>
                <form method="POST" action="{{route('user-notification')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Notification Subject" name="subject" value="{{old('subject')}}">
                            <div style="color: red;">{{$errors->first('subject')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <!--<input type="text" placeholder="Description" name="description" value="{{old('description')}}">-->
                            <textarea rows="6" cols="40" name="description" placeholder="Description..."></textarea>
                            <div style="color: red;">{{$errors->first('description')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="date" placeholder="Date" name="date" value="{{old('date')}}">
                            <div style="color: red;">{{$errors->first('date')}}</div>
                        </div>
                    </div>
                    <input type="submit" name="add" value="SEND NOTIFICATION">
                </form>
            </div>
        </center>
    </body>
</html>