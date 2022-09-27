<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
                body{
            background-color: rgba(10, 10, 178, 0.46);
            text-align: center;
        }
        #welcome{
            position: fixed;
            left: 35%;
            top: 55%;
            font-size: 50px;
            color: rgb(246, 246, 246);
        }
        #button{
            margin-top: 100px;
        }
        #signin{
            background-color: blue;
            
            border: none;
            font-size: 30px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 10px;
        }
        #signup{
            background-color: blue;
           
            border: none;
            font-size: 30px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 10px;

        }

        #adminW{
            text-decoration: none;
            background-color: blue;
            border: none;
            font-size: 30px;
            padding: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 10px;
            position: fixed;
            top: 50px;
            right: 30px;

        }

    </style>
</head>
<body>

    <img id="image" src="./Image/1.png">
    <p id="welcome">Welcome to our site</p>
    <div id="button">
    <button id="adminW"><a href="http://localhost/Login.php/task-login/adminLogin.php" style="text-decoration: none; color: white;">Admin</a></button>
    <button id="signin"><a href="http://localhost/Login.php/task-login/singin.php" style="color: rgb(246, 246, 246); text-decoration: none;">Sign In</a></button><br><br>
    <button id="signup"><a href="http://localhost/Login.php/task-login/signUp.php" style="color: rgb(246, 246, 246); text-decoration: none;">Sign Up</a></button>
</div>
    
</body>
</html>