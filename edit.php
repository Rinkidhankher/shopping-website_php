<?php
include_once("config.php");
if(isset($_POST['update'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $editquery = "UPDATE users SET username ='$username',email='$email',password = '$password' WHERE username = '$username'";
    mysqli_query($conn, $editquery);
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <?php include_once("header.php");
 ?>
<form action="edit.php" method="post">
<table>
    <h3>Update your password and email</h3>
    <tr>
        <td>Your username</td>
        <td><input type="text" name="username" value=""></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"  value=""></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" value="<?php echo $password;?>" name="password"></td>
    </tr>
    <tr>
        <td><input type="submit" name="update" value="Update Profile"></td>
    </tr>
</table>


</form>
</body>
</html>