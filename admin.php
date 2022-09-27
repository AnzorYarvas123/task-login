<?php

require "./connect.php";




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
//   foreach($information as $info){
  ?>
    <tr>
    <td><?php echo $info->name?></td>
    <td><?php echo $info->email?></td>
    <td><?php echo $info->password?></td>
    <td><?php echo $info->phone?></td>
    <td><?php echo $info->date?></td>
    <td><a href="./edit.php?id=<?php $info->id?>"><img src="./Image/edit (1).png" style="width:20px"></a></td>
    <td><a href="./delete.php?id=<?php $info->id?>"><img src="./Image/delete.png" style="width:20px"></a></td>
  </tr>

  <?php 
//   }
  ?>


</table>
    
</body>
</html>