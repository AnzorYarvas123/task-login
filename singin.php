<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: rgba(10, 10, 178, 0.46);
        }
        #form{
           text-align: center;
           padding-top: 4%;
            
        }


        #imag{
            width: 35%;
        }

  

        #name1{
           font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

         #name2{
            width: 15%;
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);

            color: white;
            font-size: 20px;
        }

        #Password{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }


        #Password2{
            width: 15%;
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            font-size: 20px;
            color: white;
            margin-bottom: 20px;
        }

        #login{

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
    <form id="form" action="#" method="post">
        
        <img id="imag" src="./Image/img (2).png">
      
        <div id="name" class="container">

          <label id="name1" for="uname"><b>Email: </b></label>
          <input id="name2" type="email" placeholder="Enter Email" name="uname" required><br>
      
          <label id="Password" for="psw"><b>Password: </b></label>
          <input id="Password2" type="password" placeholder="Enter Password" name="Password2" required><br>

          

          <a id="Welcome" href="http://localhost/Login.php/task-login/welcome.php" style="color:rgb(0, 26, 255);text-decoration: none;">Back To Welcome Page</a>

          <p>Don't have an account?<a href="http://localhost/Login.php/task-login/signUp.php" style="color:rgb(0, 26, 255)"> Sign Up</a>.</p>
      
          <button id="login" type="submit">Login</button>
         
        </div>
      

      </form>
    
</body>
</html>