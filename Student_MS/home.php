<?php 
    include 'navbar.php';
    include('./dbconnect.php');
    if(!isset($_SESSION['login'])){

        ob_end_flush(header("location: login.php"));
    }
    
    
   
 ?>

    <h1 class="text-center fw-bold">Student Details</h1>

    <table class="table table-stripped  m-4">
        <a class="btn btn-success m-2" href="create.php"> Add New Students </a>
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
                


<?php include('./footer.php'); ?>