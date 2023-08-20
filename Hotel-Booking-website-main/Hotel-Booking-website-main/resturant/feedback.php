<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else{
    echo "no connection";
}

mysqli_select_db($con, 'hotel');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Comment= $_POST['Comment'];

$query = " insert into feedback_form (Name, Email, Comment)
values ('$Name', '$Email', '$Comment')";

echo "$query";

mysqli_query($con, $query);
header('location:index.html');
 ?>