<?php include 'navbar.php';
require "dbconnect.php";

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username' OR email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('email already use'); </script>";

    }
    else {
        if($password == $confirmpassword) {
            
            $query = "INSERT INTO users VALUES('','$name', '$username', '$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Registration Successful'); </script>";

        }
        else {
            echo
            "<script> alert('email already use'); </script>";

        }
    }
}


?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 shadow p-4  mt-4">
            <?php if (isset($_GET['msg'])) { ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_GET['msg']; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php   } ?>

    <form class="m-4 p-2" method="post" action=" " autocomplete="off">
        <h1 class="text-center p-2 "> <b>Register </h1>

        <label class="form-label fw-bold"> Name: </label>
        <input type="text" class="form-control" name="name" id="name" placeholder="fullname" required value="">

        <label class="form-label fw-bold">User Name: </label>
        <input type="text" class="form-control" name="username" id="username"  placeholder="username " required value="">

        <label class="form-label fw-bold"> Email: </label>
        <input type="text" class="form-control" name="email" id="email" placeholder="enter email" required value="">
        
        <label class="form-label fw-bold"> Password: </label>
        <input type="password" class="form-control" id="password" name="password" required value="">


        <label class="form-label fw-bold">Confirm Password: </label>
        <input type="confirmpassword" class="form-control" id="confirmpassword" name="confirmpassword" required value>
        
        <input type="submit" name="submit" value="register" class="btn btn-success mt-3">
        already have an account? <a href="login.php">login now</a>

    </form>
    


<?php include('./footer.php');