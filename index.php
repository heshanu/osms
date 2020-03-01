<?php
include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <title>OSMS</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" href="css/custom.css">  
</head>
<body>
    <nav class="navbar  navbar-expand-sm  navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">osms</a>
        <span class="nav-text">customer is happiness is our AIM</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#service.php" class="nav-link">service</a></li>
                <li class="nav-item"><a href="#registration.php" class="nav-link">registration</a></li>
                <li class="nav-item"><a href="#contact.php" class="nav-link">contact</a></li>         
            </ul>
        </div>
    </nav><!---->
    <!--javascript><-->

    <header class="jumbotron back-image" style="background-image: url("images/2.jpg)">
        <div class="myclass mainheading">
            <h1 class="text-uppercase text-danger font-weight-bold" >Welcome to osms</h1><br>
            <p class="font-italic ">customer is happiness our aim</p>
            <a href="#" class="btn btn-sucess mr-4">login</a>
            <a href="#" class="btn btn-warning mr-4">sign Up</a>
        </div>
    </header>

    <div class="container text-center border-bottom">
        <div class="jumbotron">
            <h3 class="text-center">osms services</h3><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>    

    <div class="container">
        <h3>our services</h3>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa fa-sliders fa-8x text-sucess "></i></a>
                <h4 class=" mt-4">electron appliances</h4>
            </div>

            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa fa-tv fa-8x text-sucess "></i></a>
                <h4 class=" mt-4">preventive maintainces</h4>
            </div>

            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fa fa-cogs fa-8x text-sucess "></i></a>
                <h4 class=" mt-4">fault repair</h4>
            </div>
        </div>
    </div>


<hr>

<?php include ('user_registration.php');?>

<hr>

<div class="jumbotron bg-danger">
    <div class="container">
            <h2 class="text-center text-white">Happy customers</h2>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                            <img src="images/1.png" width="100%" alt="avt1" crossorigin="img-fluid" style="border-radius: 10px">
                            <h4 class="card-title">heshan umayanga</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            </p>
                    </div>              
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                            <img src="images/1.png" width="100%" alt="avt1" crossorigin="img-fluid" style="border-radius: 10px">
                            <h4 class="card-title">heshan umayanga</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           </p>
                        </div>              
                    </div>
                </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                            <img src="images/1.png" width="100%" alt="avt1" crossorigin="img-fluid" style="border-radius: 10px">
                            <h4 class="card-title">heshan umayanga</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           </p>
                        </div>              
                    </div>
                </div>
            </div>
        </div>
    </div>

<hr>
    <div class="container">
        <h2 class="text-center mb-4">contact us</h2>
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="">
                    <input type="text" name="form-control" name="name" placeholder="name"><br><br>
                    <input type="text" name="form-control" name="subject" placeholder="subject"><br><br>
                    <input type="text" name="form-control" name="subject" placeholder="email"><br><br>
                    <textarea class="form-control" name="message" placeholder="how can i hepl you"></textarea><br><br>
                    <input type="submit" name="" value="submit" class="btn btn-primary"><br><br>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <strong>headquarters</strong><br>
                osms pvt ltd <br><br>
            </div>
        </div>
    </div>

    <footer class="container bg-dark mt-5"> 
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <span class="pr-2">follow us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google"></i></a>
                    <small class="ml-2"><a href="admin/login.php">Admin login</a></small>
                </div>    
            </div>
        </div>
    </footer>
</body>
</html>