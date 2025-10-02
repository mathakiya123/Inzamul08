<?php
require_once('config.php');
$id=$_POST['id'];

$sql="DELETE FROM students WHERE id='$id'";

$query=mysqli_query($con,$sql);
if($query){
    echo 'deleted record successfuly';
}
else{
    echo 'try again latter';
}
?>