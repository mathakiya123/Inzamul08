<?php
require_once('config.php');

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];

if($name==0 && $surname==0 && $email==0 && $gender==0 && $password==0){
    echo "0";
}
else{
    $sql="INSERT INTO students (name,surname,email,gender,password) VALUES('$name','$surname','$email','$gender','$password')";
    $query=mysqli_query($con,$sql);

}

?>