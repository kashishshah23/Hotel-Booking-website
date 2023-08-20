<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else{
    echo "no connection";
}

mysqli_select_db($con, 'hotel');

$arrival_date = $_POST['arrival_date'];
$departure_date = $_POST['departure_date'];
$Adult = $_POST['Adult'];
$Children = $_POST['Children'];

 $query = " insert into book_block (arrival_date, departure_date, Adult, Children)
 values ('$arrival_date', '$departure_date', '$Adult' , '$Children')";

 echo "$query";

mysqli_query($con, $query);
header('location:index.html');
?>