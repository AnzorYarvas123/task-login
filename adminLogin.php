<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body{
            text-align: center;
            background-color: rgba(10, 10, 178, 0.46);
        }


     
        #adminEmail{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

        #adminEmail1{
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            color: white;
            font-size: 20px;
        }

        #adminPassword{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

        #adminPassword1{
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            color: white;
            font-size: 20px;
        }



        #submit{
            margin-top: 2%;
            width: 10%;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 20px;
            font-family: Arial;
            font-weight: 700;
            background-color: rgb(1, 1, 189);
            border: none;
            color: white;
            border-radius: 40%;
        }





    </style>
</head>
<body>

    <form action="#">
        <div id="form" class="container">
          <h1 style="font-size:80px; font-weight: 800; font-family:'Times New Roman', Times, serif;color: rgb(44, 44, 152);">admin Sign In</h1>
          
          

          <label id="adminEmail" for="firstN"><b>Email: </b></label>
          <input id="adminEmail1" type="text" placeholder="Enter Full Name" name="adminEmail1" required><br><br>

          <label id="adminPassword" for="psw"><b>Password: </b></label>
          <input id="adminPassword1" type="password" placeholder="Enter Password" name="adminPassword1" required><br><br>
    
    
          <div class="clearfix">
            
            <button id="submit" type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    
</body>
</html>



