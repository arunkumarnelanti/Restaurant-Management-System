<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile || ChefHands...</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/profileStyle.css')}}">
</head>
<body>
    <p id="goback"><a href="Home">HOME</a></p>
    <div class="container">
        <p id="section">Profile</p><br><br>
        <center>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th colspan="2" style="font-size: 30px;font-family:Amarante;">Details :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="information">Full Name</td>
                        <td id="detail">{{$data->fullname}}</td>
                    </tr>
                    <tr>
                        <td id="information">User Name</td>
                        <td id="detail">{{$data->username}}</td>   
                    </tr>
                    <tr>
                        <td id="information">Email</td>
                        <td id="detail">{{$data->email}}</td>
                    </tr>
                    <tr>
                        <td id="information">Mobile Number</td>
                        <td id="detail">{{$data->mobile}}</td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>
</body>
</html>