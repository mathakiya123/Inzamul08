<?php
require_once('config.php');
$sel="SELECT * FROM  students";
$response=array();
$query=mysqli_query($con,$sel);

while($row=mysqli_fetch_array($query))
{
    $data['name']=$row['name'];
    $data['surname']=$row['surname'];
    $data['email']=$row['email'];
    $data['gender']=$row['gender'];
    $data['password']=$row['password'];

        array_push($response,$data);
}

echo json_encode($response);
mysqli_close($con);
?>