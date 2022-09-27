<?php
include 'connect.php';

$sql ='SELECT * FROM sign';

$getData = $db->query($sql);

$information = $getData->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <style>
        body{
            text-align: center;
            background-color: rgba(10, 10, 178, 0.46);
        }
        #firstN{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }
        #firstN1{
            width: 15%;
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);

            color: white;
            font-size: 20px;
        }

     
        #email{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

        #email1{
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            color: white;
            font-size: 20px;
        }

        #password{
           font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

        #password1{
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            color: white;
            font-size: 20px;
        }

        #Rpassword{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

        #Rpassword1{
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


        #Phone{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);

        }
        #Phone1{
            width: 15%;
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            font-size: 20px;
            color: white;
        }

        #Date{
            font-size: 30px;
           font-family:'Times New Roman', Times, serif;
           color: rgb(44, 44, 152);
        }

        #Date1{
            width: 15%;
            height: 25px;
            font-family:'Times New Roman', Times, serif;
            background-color: rgba(0, 0, 255, 0.023);
            font-size: 20px;
            color: white;
        }

        table, th, td {
  border: 1px solid black;
}
    </style>
</head>
<body>

    <form action="#"  method="post">
        <div id="form" class="container">
          <h1 style="font-size:80px; font-weight: 800; font-family:'Times New Roman', Times, serif;color: rgb(44, 44, 152);">Sign Up</h1>
          
          

          <label id="firstN" for="firstN"><b>Full Name: </b></label>
          <input id="firstN1" type="text" placeholder="Enter Full Name" name="firstN1" required><br><br>

      
          <label id="email" for="email"><b>Email: </b></label>
          <input id="email1" type="email" placeholder="Enter Email" name="email1" required><br><br>
      
          <label id="password" for="psw"><b>Password: </b></label>
          <input id="password1" type="password" placeholder="Enter Password" name="password1" required><br><br>
      
          <label id="Rpassword" for="psw-repeat"><b>Repeat Password: </b></label>
          <input id="Rpassword1" type="password" placeholder="Repeat Password" name="Rpassword1" required><br><br>


          
          <label id="Phone" for="phone"><b>Phone Number: </b></label>
          <input id="Phone1" type="text" placeholder="Enter Number" name="Phone1" required><br><br>
      

          <label id="Date" for="Date"><b>Date of Birth: </b></label>
          <input id="Date1" type="date" placeholder="Enter date" name="Date1" required><br>
      

      
          <p>Already have an account? <a href="http://localhost/Login.php/task-login/singin.php" style="color:rgb(0, 26, 255)">Login</a>.</p>
      
          <div class="clearfix">
            
            <button id="submit" type="submit" name="submit">Sign Up</button>
          </div>
        </div>
      </form>

      <table>
  <tr>

    <th>Full Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone</th>
    <th>Date of Birth</th>
    <th>Edit</th>
    <th>Delete</th>

  </tr>

  <?php
  foreach($information as $info){
  ?>
    <tr>
    <td><?php echo $info->name?></td>
    <td><?php echo $info->email?></td>
    <td><?php echo $info->password?></td>
    <td><?php echo $info->phone?></td>
    <td><?php echo $info->date?></td>
    <td><?php $info->id ?><img src="./Image/edit (1).png" style="width:20px"></td>
    <td><a href="./delete.php?id=<?php $info->id?>"><img src="./Image/delete.png" style="width:20px"></a></td>
  </tr>
  <?php
   }

 
  ?>


</table>


    
</body>
</html>



<?php

if(isset($_POST['submit'])){

    $name = $_POST["firstN1"];
    $email = $_POST["email1"];
    $password = "abc";
    $Rpassword =  "abc";
    $phone = $_POST["Phone1"];

    $sql = "INSERT INTO sign (`name`, `email`, `password`, `repassword`) VALUES ($name, $email, $password, $Rpassword);";

    $result = $db->exec($sql);

    // header("location: singin.php");


}

?>