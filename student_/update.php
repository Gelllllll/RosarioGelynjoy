<?php include('./navbar.php'); ?>
    <form action="./script.php" method="post">
        <h1 class="fw-bold">Update Student</h1>

        <?php
            $id=$_GET['id'];
            $sql="SELECT * FROM student WHERE ID='$id'";
            $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res); 
                ?>

                <div class="form-group">
                    <label class="form-label fw-bold">ID</label>
                    <input type="text" name="id" required class="form-control" readonly value="<?php echo $row['id']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">Full Name</label>
                    <input type="text" name="name" required class="form-control"  value="<?php echo $row['name']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">Student_ID</label>
                    <input type="text" name="student_id" required class="form-control"  value="<?php echo $row['student_id']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">Course Year and Section</label>
                    <input type="text" name="CourseYrSection" required class="form-control" value="<?php echo $row['CourseYrSection']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">Address</label>
                    <input type="text" name="address" required class="form-control"  value="<?php echo $row['address']; ?>";
                </div>

                <input type="submit" name="update"class="btn btn-success m-2" value="Update">
                <a class="btn btn-secondary m-2"  href="./index.php">Go Back</a>

                <?php
            }

            ?>
            

