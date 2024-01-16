<?php 
require "dbconnect.php";
include 'navbar.php'; 



if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'  ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) == 1) {
        if($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else {
            echo
            "<script> alert('wrong password'); </script>";
        }
    }
    else {
        echo
        "<script> alert ('user not registered'); </script>";
    }
      
    
}
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 shadow p-4  mt-4">
            


<div class="container">
    <div class="row justify-content-center">
    <form class="m-4 p-2" method="post" action=" " autocomplete="off">
        <h1 class="text-center p-2"> Login </h1>

        <label class="form-label fw-bold"> Email: </label>
        <input type="text" class="form-control" name="email" id="email" placeholder="email" required value=""> 

        <label class="form-label fw-bold"> Password: </label>
        <input type="password" class="form-control" name="password" id="password" placeholder="password" required value=""> 
        
        <button type="submit" class="btn btn-primary" name="submit">Log in</button>
                <a class="btn btn-success" href="register.php">Register</a>
                Don't have an account?<a href="register.php">Register First</a>
    </form>

    </div>
    </div>
    


<?php include('./footer.php');