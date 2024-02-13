<?php 
    include 'navbar.php';
    include('./dbconnect.php');
    if(!isset($_SESSION['login'])){

        ob_end_flush(header("location: login.php"));
    }
       
 ?>
                      
  <div class="m-5 p-2">
  <?php if (isset($_GET['msg'])) { ?>

<div class=" " role="alert">
    <strong><?= $_GET['msg']; }?></strong>
        <h3 style="font-weight: bolder;">Add New Students</h3>
        <form class="m-4 p-2" method="post" action="./script.php">
            <label class="form-label fw-bold">Name: </label>
            <input type="text" name="name" class="form-control" placeholder="name" required>
            
            <label class="form-label fw-bold">Student_ID</label>
            <input type="text" name="student_id"class="form-control"placeholder="student_id" required>

            <label class="form-label fw-bold">Course Year and Section: </label>
            <input type="text" name="CourseYrSection"class="form-control"placeholder="CourseYrSection" required>

            <label class="form-label fw-bold">Address</label>
            <input type="text" name="address"class="form-control"placeholder="address" required>

            <input type="submit" value="Add Student" class="btn btn-success mt-3" name="create">
            
        </form>
        <hr>
 
    <h1 class="text-left fw-bold">Student Details</h1>

    <table class="table table-stripped  m-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Student ID</th>
                <th>Course Year and Section</th>
                <th>Address</th>
                <th>Action</th>
            </tr> 
        </thead>

            <tbody>
                <?php
                $sql="SELECT * FROM student";
                $res=mysqli_query($conn,$sql);

                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                       $id=$row['id'];
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['student_id']."</td>";
                        echo "<td>".$row['CourseYrSection']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='./update.php?id=$id'>Update</a> ";
                        echo "<a class='btn btn-danger btn-sm' href='./delete.php?id=$id'>Delete</a> ";

                        
                    }
                } 
                ?>

            </tbody>
                
<?php include 'footer.php'; ?>


