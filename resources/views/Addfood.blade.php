<html lang="en">
    <head>
    <title>Add Food || ChefHands...</title>
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
            <p id="section">Add Food Item</p>
                <form method="POST" action="{{route('add-food')}}" enctype="multipart/form-data">
                @csrf
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Item Name" name="item">
                            <div style="color: red;">{{$errors->first('item')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="number" placeholder="price" name="price">
                            <div style="color: red;">{{$errors->first('price')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Restaurent Name" name="restaurent">
                            <div style="color: red;">{{$errors->first('restaurent')}}</div>
                        </div>
                    </div>
                    <div class="field text">
                        <div class="input-area">
                            <input type="text" placeholder="Location" name="location">
                            <div style="color: red;">{{$errors->first('location')}}</div>
                        </div>
                    </div>
                    <input type="submit" name="add" value="ADD FOOD ITEM">
                </form>
            </div>
        </center>
    </body>
</html>