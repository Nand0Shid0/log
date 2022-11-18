<?php
$inc = include('Conectar.php');
if($inc){
    session_start();
    $banner = true;
    $Dato = trim ($_POST['Username']);
    $Pass = trim  ($_POST['Password']);
    $pass = md5($Pass);

    //$Dato = 'Fcho';
    //pass = md5('fercho');

    $online="UPDATE users SET Llast_login = NOW(), Login = '1' WHERE Username = '$Dato' AND Password= '$pass'";
    $log= "SELECT * FROM users WHERE Username = '$Dato' AND Password = '$pass'";
    $con = mysqli_query($conn,$log);
    $var= mysqli_num_rows($con);
    $datos = $con->fetch_array();
    if($var){
        $checkEmail = $datos['Username'];
        $checkDeleted = $datos['deleted'];
        if($checkEmail == $Dato){
            if ($checkDeleted == 1){
                echo "Deleted";
            }else{
                mysqli_query($conn,$online);
                echo "Login";
            }
        }
    mysqli_close($conn);
    }
}

?>