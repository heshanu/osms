<?php

session_start();
if($_SESSION['is_login']){
    $remail=$_SESSION['rEmail'];
}
else{
    echo "<script>location.href='../requester.php';</script>";
}
?>


<div class="col-sm-6 mt-5 mr-3">
    <form action="" method="POST">
        <div class="form-group">
            <label for="checkid">request ID</label>
            <input type="text" name="" class="form-control" name="checkid" id="checkid">
        </div>
        <button type="submit" class="btn btn-danger">search</button>
    </form>

    <?php
        if(isset($_POST['checkid'])){
            $sql="select * from "
        }
    ?>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <title>OSMS</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" href="css/custom.css">   

 <nav class="navbar  navbar-expand-sm  navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">osms</a>
        <span class="nav-text">customer is happiness is our AIM</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#service.php" class="nav-link">service</a></li>
                <li class="nav-item"><a href="#registration.php" class="nav-link">registration</a></li>
                <li class="nav-item"><a href="#contact.php" class="nav-link">contact</a></li>         
            </ul>
        </div>
    </nav>

    <div></div>

    <!--<-->




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