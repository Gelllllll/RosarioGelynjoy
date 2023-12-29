<?php include('./dbconnect.php');
    $id=$_GET['id'];
    $sql="DELETE FROM student where ID='$id'";
    $res=mysqli_query($conn,$sql);

    if($res){
        header('location:home.php');
    }else
    {
        echo "Failed";
    }

    ?>