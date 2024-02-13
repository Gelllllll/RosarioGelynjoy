<?php
include('dbconnect.php');

?>
<style>
    table {
  border-collapse: collapse;
  width: 100%;
  background-color: aqua;
}

th, td {
  border: 1px solid black;
  padding: 0.5em;
}

th {
  background-color: aqua;
}

th:first-child, td:first-child {
  text-align: left;
}

tbody tr:nth-child(even) {
  background-color: aqua;
}

caption {
  font-size: 1.5em;
  font-weight: bold;
}
</style>

<div class="m-5 p-2">

<table class="table table-stripped  m-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Student ID</th>
                <th>Course Year and Section</th>
                <th>Address</th>
            </tr> 
        </thead>
</div>
<?php
    // Get the search term

    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM student WHERE name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>". $row['id'] . '<br>';
                echo "<td>". $row['name'] . '<br>';
                echo "<td>". $row['student_id'] . '<br>';
                echo "<td>". $row['CourseYrSection'] . '<br>';
                echo "<td>". $row['address'] . '<br>';
            }
        } else {
            echo 'No results found.';
        }
    
    } else {
        echo 'No results found.';
    }

    // Close the connection
    mysqli_close($conn);
 ?>