<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

<script>
function img(x){

if(x==0)
document.getElementById('myimg').style.display='block';
else
document.getElementById('myimg').style.display='none';
return;

}


</script>

</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Create Event</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Event Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="address">Event Venue :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Event Type :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="rad1" id="male" onclick="img(0)" checked>
                                <label for="male">public</label>
                                <span class="check"></span>
                                <!-- <input type="radio" name="rad1" onclick="img(0)" checked> show img -->
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="rad1" id="female" onclick="img(1)" >
                                <label for="female">Private</label>
                                <span class="check"></span>
                            </div>
                        </div>

                        <div id="myimg">
                            <p>Click on the "Choose File" button to upload an image:</p>

                            <form action="/action_page.php">
                            <input type="file" id="myFile" name="filename">
                            <input type="submit" value="Upload">
                            </form>
                        
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Event Category :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="us">Musical Shows</option>
                                        <option value="uk">Cooporate Events</option>
                                        <option value="uk">Seminar</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                         </div>   
                        </div>
                        <div class="form-group">
                            <label for="birth_date">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Date :</label>
                            <input type="text" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Time :</label>
                            <input type="text" name="pincode" id="pincode">
                        </div>
                       
                        
                        <div class="form-submit">
                            <input type="submit" value="Back" class="submit" name="Back" id="reset" />
                            <input type="submit" value="Select Service Providers" class="submit" name="Select Service Providers" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>