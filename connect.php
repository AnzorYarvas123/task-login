<?php
 $server = 'mysql:host=localhost;dbname=login';
 $user = 'root';
 $pass ='root';


 try{
    $db = new PDO($server, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    
 }catch(PDOException $error ){
    echo 'connection Failed' . $error->getMessage();
 }

?>