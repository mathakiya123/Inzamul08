<?php
require_once('config.php');

$id=$_POST['id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];

$sql="UPDATE students SET name='$name',Surname='$surname',email='$email',gender='$gender',password='$password' WHERE id='$id'";
$query=mysqli_query($con,$sql);
if($query)
{
    echo" updated record succesully";
}
else{
    echo "try again latter";
}
?>