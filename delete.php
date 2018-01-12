<?php


    $u_id=isset($_POST['u_id'])?$_POST['u_id']:null;
    $db=mysqli_connect("localhost","id4228279_root","password","id4228279_details");


    if(mysqli_connect_errno())
    {
      echo("failed to connect".mysqli_connect_error());
    }
    else
    {
    //echo("connection ok");
    $sql="DELETE FROM user_details WHERE u_id='$u_id'";
    //echo ('ZZZZZZZZZ');
    $result=mysqli_query($db,$sql);
    //echo($u_id);
    echo($result);
    }
?>