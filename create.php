<?php
require_once './connect.php';

if(isset($_POST['submit'])){

    $name = $_POST["firstN1"];
    $email = $_POST["email1"];
    $password = $_POST["password1"];
    $Rpassword = $_POST["Rpassword1"];
    $phone = $_POST["Phone1"];
    $date = $_POST["Date1"];

    $sql = "INSERT INTO sign (name, email, password, repassword, phone, date) VALUES (:name, :email, :password, :Rpassword, :phone, :date)";

    $query = $db->prepare($sql);

    $query->bindParam(':firstN1',$name, PDO::PARAM_STR);
    $query->bindParam(':email1',$email, PDO::PARAM_STR);
    $query->bindParam(':password1',$password, PDO::PARAM_STR);
    $query->bindParam(':Rpassword1',$Rpassword, PDO::PARAM_STR);
    $query->bindParam(':Phone1',$phone, PDO::PARAM_INT);
    $query->bindParam(':Date1',$date, PDO::PARAM_STR);

    $result = $query->execute();

    //header("location: singin.php");

    // if($password === $Rpassword){

    //     // $sql = "INSERT INTO sign (name, email, password, repassword, phone, date) VALUES ($name, $email, $password, $Rpassword, $phone, $date)";

    //     // $query = $db->prepare($sql);
    
    //     // $query->bindParam(':firstN1',$name, PDO::PARAM_STR);
    //     // $query->bindParam(':email1',$email, PDO::PARAM_STR);
    //     // $query->bindParam(':password1',$password, PDO::PARAM_STR);
    //     // $query->bindParam(':Rpassword1',$Rpassword, PDO::PARAM_STR);
    //     // $query->bindParam(':Phone1',$phone, PDO::PARAM_INT);
    //     // $query->bindParam(':Date1',$date, PDO::PARAM_STR);
    
    //     // $result = $query->execute();
    
    //     // header("location: singin.php");


    // }else{
    //     echo 
    //     "<script>alert('Password Not Match');</script>";
    // }








}



?>