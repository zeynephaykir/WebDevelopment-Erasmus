<?php


require_once "config.php";
 
$con = mysqli_connect('localhost', 'root', '','festivaldb');

if (isset($_POST['submit'])) 
{
    // get the post records
    $name = $_POST['name'];
    $tickettype = $_POST['tickettype'];
    $quantity = $_POST['quantity'];


    // database insert SQL code
    $sql = "INSERT INTO `tickets` (`Name`, `TicketType`, `TicketQuantity`) VALUES ('$name', '$tickettype', '$quantity')";

    // insert in database 
    $rs = mysqli_query($link, $sql);

    if($rs)
    {
        echo "Records Inserted";
    }
    else {
        echo "Records Not Inserted";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RECEIPT</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <script src="js.js"></script>
</head>

<body>
    <div id="header">
        <h1 align="center">SUMMER FESTIVAL 2022</h1>

    </div>

    <div align="center" class="container">
        
        <br> <br>
        <br> <br>
        
        <?php

        echo "You have successfully bought  $quantity tickets in the name of $name for $tickettype !";

        ?>

        <br> <br>
        <br> <br>

         <a class="btn btn-primary btn-lg px-4 me-sm-3" href="index.php">Click here to go back to main page!</a>
    </div>

    

    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    
    
</body>

</html>