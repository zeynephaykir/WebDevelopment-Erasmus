<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTERATION</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <script src="js.js"></script>
</head>

<body>
    <div id="header">
        <h1 align="center">SUMMER FESTIVAL 2022</h1>

    </div>
    <hr />
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="artists.php">Artists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="schedule.php">Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="venue.php">Venue</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Registeration</a>
            </li>
        </ul>
    </nav>
    <hr />

    <div class="container">
        <h2 align="center">PURCHASE YOUR TICKET</h2>
        <br> <br>
        <div class="row">
                
                    <div class="col-7">
                        <h3>We are so glad you decided to join us!</h2>
                        <p>
                            Purchase your Summer Festival 2022 ticket by using the form to the right, please state your full name on the ticket and do not use any characters other than alphabetical characters. Multiple tickets may be purchased within the same order, so feel free to bring a friend or two along! However, ticket sales are limited to three per person as they are high in demand!
                        </p>
                        <b> IMPORTANT: Day 1 & Day 2 tickets are sold separetly!</b>
                        
                        <br><br>

                        <h4>Don't forget to check these rules</h4>
                        <ul class="rules">
                            <li>Disposable cameras and small cameras (No professional grade cameras and video equipment)ARE allowed</li>
                            <li>Small bag, cinch bag, or purses ARE allowed</li>
                            <li>Large backpacks over 9X10X12 inches are NOT allowed</li>
                            <li>Outside food and beverages are NOT allowed</li>
                            <li>Pets (except service animals) are NOT allowed</li>
                            <li>Illegal drugs or substances, firearms, fireworks and weapons or objects that could be used as weapons are NOT allowed</li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <form action="senddata.php" name="myForm" onsubmit="return validate()" method="POST" autocomplete="off">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Name Surname" autofocus class="form-control" required pattern="(\w\w+)\s(\w+)$" 
                                autocomplete="off" oninvalid="this.setCustomValidity('Please enter your full name')" oninput="this.setCustomValidity('')"/>
                                
                            </div>

                            <br> 

                            Ticket Type <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="tickettype" value="Day1" />Day 1
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="tickettype" value="Day2" />Day 2
                                </label>
                            </div>

                            <br> <br>

                            <div class="form-group">
                                    <label>Number of tickets</label>
                                    <select class="form-control" id="quantity" name="quantity" required>
                                        <option value="">--Choose number of tickets--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                            <br> 

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="terms" value="Y" />
                                    Do you agree with the terms of use?
                                </label>
                            </div>

                            <br> <br>

                            <input type="submit" class="btn btn-primary" name="submit" value="Purchase">
                            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
                        </form>
                    </div>

    </div>

    <hr />

    <div class="container-fluid footer">
        <div class="navbar-nav">
            <i>Contact: <a href="mailto:zeynep.haykir@student.um.si">zeynep.haykir@student.um.si</a></i>
        </div>
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