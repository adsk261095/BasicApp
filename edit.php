<?php


$u_id=isset($_POST['u_id'])?$_POST['u_id']:null;
$name=isset($_POST['name'])?$_POST['name']:null;
$mobile=isset($_POST['mobile'])?$_POST['mobile']:null;
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
    $sql="UPDATE user_details SET name='$name' , mobile='$mobile' where u_id='$u_id'";
    //echo ('ZZZZZZZZZ');
    $result=mysqli_query($db,$sql);
    //echo($result);
    //echo"<table><tr><th>name</th><th>mobile</th></tr>";
    //$s="";
    // $obj=new stdClass();;
    // while($row = $result->fetch_assoc())
    // {
    //     $obj->name=$row["name"];
    //     $obj->mobile=$row["mobile"];
    //     $obj->u_id=$row["u_id"];
    //     // $s+=$row["id"]." ".$row["firstname"]; 
    // }
    // $json=json_encode($obj);
    echo($result);
}
?>