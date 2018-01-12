<?php

$name=isset($_POST['name'])?$_POST['name']:null;
$gender=isset($_POST['gender'])?$_POST['gender']:null;
$email=isset($_POST['email'])?$_POST['email']:null;
$mobile=isset($_POST['mobile'])?$_POST['mobile']:null;
$password=isset($_POST['password'])?$_POST['password']:null;
$db=mysqli_connect("localhost","id4228279_root","password","id4228279_details");
    
    // echo (mysqli_connect_errno());
    // echo ($name);
    // echo ($gender);
    // echo ($email);
    
    if(mysqli_connect_errno())
    {
      echo("failed to connect".mysqli_connect_error());
    }
    else
    {
    //echo("connection ok");
    $sql="INSERT INTO user_details (name,mobile,gender,email,password)VALUES('$name','$mobile','$gender','$email','$password')";
    //echo ('ZZZZZZZZZ');
    $result=mysqli_query($db,$sql);
    //echo('rows');

    echo($result);
}
?>