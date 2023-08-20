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
$Phone_Number = $_POST['Phone_Number'];
$message = $_POST['message'];

$query = " insert into hotel_contact (Name, Email, Phone_Number, message)
values ('$Name', '$Email', '$Phone_Number' , '$message')";

echo "$query";

mysqli_query($con, $query);
header('location:index.html');
?>