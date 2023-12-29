<?php
    session_start();
    ob_start();
    include('./dbconnect.php');

?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="./res/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <?php
        if(isset($_SESSION['user'])){
            ?>
            <nav class="nav navbar-expand-lg bg-light">
                <div class="Container-fluid">
                    <h1>Student Management System <?php echo $_SESSION['username']; ?></h1>
                </div>

                <ul class="nav nav-navbar navbar-right">
                    <li><a class="nav nav-link fw-bold" href="./logout.php">Logout</a></li>
                </ul>
            </nav> 
            <?php 
        } else {
            ?> 
            <nav class="nav navbar-expand-lg bg-light">
                <div class="Container-fluid">
                    <h1 style="background-color: chartreuse; font-family:'Times New Roman', Times, serif"><b>Student Management System</h1>
                </div>

                <ul class="nav nav-navbar navbar-right">
                    <li><a class="nav nav-link fw-bold" href="./logout.php">Logout</a></li>
                </ul>
            </nav> 
            <?php
        }

        ?>


