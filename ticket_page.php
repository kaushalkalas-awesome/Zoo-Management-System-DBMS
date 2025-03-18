<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ticket_db";

$con = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $regular = $_POST['regular_ticket'];
    $child = $_POST['child_ticket'];

    $sql = "INSERT INTO `ticket_info` (`name`, `phone`, `regular`, `child`) VALUES ( '$name', '$phone', '$regular', '$child')";

    $rs = mysqli_query($con, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="style.css">
    <title>Ticket reservation</title>
</head>
<body>
     <div class="form-container"> 
        <form action="" method="post">
            <h1>BOOK TICKET</h1>
            <h5>Select Number of Tickets</h5>
            <h5>Regular: Rs300 /-</h5>
            <h5>Child: Rs150 /-</h5>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="text" name="phone" required placeholder="enter your phone no.">
            <input type="number" name="regular_ticket" required placeholder="select regular tickets">
            <input type="number" name="child_ticket" required placeholder="select child tickets">
            <input type="submit" name="submit" value="Book Ticket" class="form-btn">
        </form>
     </div>
</body>