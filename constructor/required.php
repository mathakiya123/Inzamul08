 <!-- prectice used on program simple example in php validation  try to prectice   -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
  </head>
  <body>
    
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php  $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php  $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error">*<?php $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php  $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>

</body>
  </html>

<?php

$nameErr ;
 $emailErr; 
  $genderErr; 
  $websiteErr; 
$name = $email = $gender = $comment = $website = "";


if($_SERVER['REQUEST_METHOD']=="POST"){

    if(empty($_POST['name'])){
        $nameErr="name is required";

    }
    else{
        $name=text_input($_POST['name']);

    }

    if(empty($_POST['email'])){
        $emailErr="email is required";

    }
    else{
        $email=text_input($_POST['email']);

    }
    
    if(empty($_POST['gender'])){
        $genderErr="gd is required";

    }
    else{
        $gender=text_input($_POST['gender']);

    }
    if(empty($_POST['website'])){
        $websiteErr="wb is required";

    }
    else{
        $website=text_input($_POST['website']);

    }
    





}

















function text_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return  $data;
}  


?>






<?php

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>



