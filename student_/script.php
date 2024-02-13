<?php 
    include('dbconnect.php');

    //create script
    if(isset($_POST['create'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $student_id=mysqli_real_escape_string($conn,$_POST['student_id']);
        $CourseYrSection=mysqli_real_escape_string($conn,$_POST['CourseYrSection']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);

        $sql="INSERT INTO student(name,student_id,CourseYrSection,address) VALUES('$name','$student_id','$CourseYrSection','$address')";
        $res=mysqli_query($conn,$sql);

        if($res){
            header('location:index.php');
        }else{
            echo "Student Add failed!";
        }
    }

    //update script
    if(isset($_POST['update'])){
        $id=mysqli_real_escape_string($conn,$_POST['id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $student_id=mysqli_real_escape_string($conn,$_POST['student_id']);
        $CourseYrSection=mysqli_real_escape_string($conn,$_POST['CourseYrSection']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);

        $sql="UPDATE student SET name='$name', student_id='$student_id', CourseYrSection='$CourseYrSection', address='$address' WHERE ID='$id'";
        $res=mysqli_query($conn,$sql);

        if($res){
            header('location:index.php');
        }else{
            echo "Update Failed";
        }
    }

   



?>