<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else{
    echo "no connection";
}
mysqli_select_db($con, 'hotel');

 
$email = $_POST['email'];
 

$query = " insert into newsletter (email)
values ('$email')";

echo "$query";

mysqli_query($con, $query);
header('location:index.html');
?>