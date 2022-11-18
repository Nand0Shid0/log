<?php

$con = include("Conectar.php");

if($con){

    session_start();
    $Username=trim($_POST["Username"]);
    $pass=trim($_POST["Password"]);
    $Name=trim($_POST["Name"]);
    $Email = trim($_POST["Email"]);
    $Phone = trim($_POST["Phone"]);
    $Pass = md5($pass);
    $Gender = trim($_POST["Gender"]);
 

    //$log= "SELECT * FROM login2 WHERE User = '$Name' AND Password = '$Pass'";
    $log = "INSERT INTO users(Username, Password, Name, Email, Phone, Gender) VALUES('$Username','$Pass', '$Name', '$Email','$Phone', '$Gender')";
    $Request=mysqli_query($conn,$log);
    $var= mysqli_num_rows($Request);
    $datos = $Request->fetch_array();
    
    if ($Request){
        echo "Registrado";

    }else {
	echo "Algo salio mal";
    }
}


    mysqli_close($conn);



?>