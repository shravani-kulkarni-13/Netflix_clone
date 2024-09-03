<?php 
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $con = new mysqli('localhost','root','','netflix_signin');

    if($con->connect_error){
        die("Connection Failed:".$con->connect_error);
    }
    else{
        $stmt = $con->prepare("insert into signin(email, password)values(?,?)");
        $stmt->bind_param("ss",$email,$pass);
        $stmt->execute();
        echo "<h1>You have Signed in!!</h1>";
        $stmt->close();
        $con->close();
    }
?>