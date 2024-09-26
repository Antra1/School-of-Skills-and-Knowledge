<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'alifatimdata');

$User = isset($_POST['User']) ? $_POST['User'] : '';
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Mobile = isset($_POST['Mobile']) ? $_POST['Mobile'] : '';
$Comments = isset($_POST['Comments']) ? $_POST['Comments'] : '';

$query ="INSERT INTO userinfodata (User, Email, Mobile, Comments)
VALUES ('$User' , '$Email' , '$Mobile', '$Comments')";
echo "$query";
 
mysqli_query($con, $query);

header('location:Index.php');

?> 
 
