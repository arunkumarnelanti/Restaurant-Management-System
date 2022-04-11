<html lang="en">
    <head>
        <title>Home Page || ChefHands...</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
        <style>
            body{
                background: #F0FFFF;
            }    
            /*style for scroll bar starts here */
            ::-webkit-scrollbar {
                width: 4px;
                background-color: black;
            }
            ::-webkit-scrollbar-thumb {
                border-radius: 800px;
                background-color: green;
            }
            /*style for scroll bar ends here*/
        </style>
    </head>
    <body>
        <br><br>
        <h3 style="font-family:Aclonica; font-size:40px; color:green; padding-left: 20px;padding-top:0px;margin-top:0px;">Helloo, Mr. {{$data->fullname}} !</h3>
        <br><br>
        <div class="home">
            <div class="container-fluid">
                <div class="row">
                    <center>
                        <div class="col-lg-4 col-md-4 col-sm-12">  
                            <a href="Addrestaurent">
                                <img src="images/addrestaurent.jpg" style="width:220px; height:220px; border-radius:25px;box-shadow: 7px 7px 5px lightblue;" alt="Add Restaurent">
                            </a><br>
                            <label style="font-size:17px; font-weight:bold; font-color:#444; font-family:Aclonica;">Add Restaurants</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"> 
                            <a href="Addfood"> 
                                <img src="images/addfood.jpg" style="width:220px; height:220px; border-radius:25px;box-shadow: 7px 7px 5px lightblue;" alt="Add Food Items">
                            </a><br>
                            <label style="font-size:17px; font-weight:bold; font-color:#444;font-family:Aclonica;">Add Food Items</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12" > 
                            <a href="Notifications"> 
                                <img src="images/notifications.png" style="width:220px; height:220px; border-radius:25px;box-shadow: 7px 7px 5px lightblue;" alt="Notification">
                            </a><br>
                            <label style="font-size:17px; font-weight:bold; font-color:#444;font-family:Aclonica;">Notifications</label>
                        </div>
                    </center>
                </div>
                <div class="row">
                    <center>
                        <div class="col-lg-4 col-md-4 col-sm-12">  
                            <a href="Ads">
                                <img src="images/ads.jpg" style="width:220px; height:220px; border-radius:25px;box-shadow: 7px 7px 5px lightblue;" alt="Ads">
                            </a><br>
                            <label style="font-size:17px; font-weight:bold; font-color:#444;font-family:Aclonica;">Post Ads</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">  
                            <a href="profile">
                                <img src="images/profile.jpg" style="width:220px; height:220px; border-radius:25px;box-shadow: 7px 7px 5px lightblue;" alt="Ads">
                            </a><br>
                            <label style="font-size:17px; font-weight:bold; font-color:#444;font-family:Aclonica;">Profile</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"> 
                            <a href="logout"> 
                                <img src="images/logout.jpg" style="width:220px; height:220px; border-radius:25px;box-shadow: 7px 7px 5px lightblue;" alt="Logout">
                            </a><br>
                            <label style="font-size:17px; font-weight:bold; font-color:#444;font-family:Aclonica;">Logout</label>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>