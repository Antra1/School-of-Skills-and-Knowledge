<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'admindata');

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';


$query ="INSERT INTO admindata (Username, Password)
VALUES ('$Username' , '$Password' )";
echo "$query";
 
mysqli_query($con, $query);

header('location:admin.php');

?> 
 