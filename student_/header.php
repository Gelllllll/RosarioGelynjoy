<?php
ob_start();
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container vh-100 mb-5">
        <!-- navbar start -->
                    <?php
                    if (isset($_SESSION['login'])) {
                        $userID = $_SESSION['u_id'];

                        $getUser = $conn->prepare("SELECT user_username FROM users WHERE user_id = ?");
                        $getUser->execute([$userID]);

                        foreach ($getUser as $user) { ?>
                            <a class="nav-link me-3" href="script.php?logout">Welcome <b><?= $user['user_fname'] ?></b>, Logout</a>
                        <?php } ?>
                    <?php } else { ?>
                        <a class="nav-link me-3" href="login.php">Login</a>
                    <?php } ?>

                </div>
            </div>
       
        <!-- navbar end -->