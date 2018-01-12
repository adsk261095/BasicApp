<?php


$email=isset($_POST['email'])?$_POST['email']:null;
$password=isset($_POST['password'])?$_POST['password']:null;
$db=mysqli_connect("localhost","id4228279_root","password","id4228279_details");
    
    // echo (mysqli_connect_errno());
    // echo ($name);
    // echo ($gender);
     // echo ($email);
     // echo ($password); 
    if(mysqli_connect_errno())
    {
      echo("failed to connect".mysqli_connect_error());
    }
    else
    {
    //echo("connection ok");
    $sql="SELECT * FROM user_details WHERE email='$email' AND password='$password'";
    //echo ('ZZZZZZZZZ');
    $result=mysqli_query($db,$sql);
    //echo($result);
    //echo"<table><tr><th>name</th><th>mobile</th></tr>";
    //$s="";
    $obj=new stdClass();;
    while($row = $result->fetch_assoc())
    {
        $obj->name=$row["name"];
        $obj->mobile=$row["mobile"];
        $obj->u_id=$row["u_id"];
        // $s+=$row["id"]." ".$row["firstname"]; 
    }
    $json=json_encode($obj);
    echo($json);
}
?>