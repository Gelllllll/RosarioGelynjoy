<?php include('./navbar.php'); ?>
    <div class="m-5 p-2">
        <h1 class="display-1">Add New Students</h1>
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
            

<?php include('./footer.php'); ?>