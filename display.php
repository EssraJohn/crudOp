<!DOCTYPE html>
<html>
   <head>
      <title>Dashboard</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<form> 
<body>
   <center>
   <h2 style="color:orange"> <u>Student Details</u></h2>
<br>
   <br>
 <?php 
 //Creating the reading page   
 // Include config file
 require_once "config.php";

 // Attempt select query execution
 $sql = "SELECT * FROM student";
 if($result = mysqli_query($conn, $sql)){
 if(mysqli_num_rows($result) > 0){
 echo '<table bgcolor="grey" width="400">';
 echo '<tr bgcolor="orange">';
 echo "<th width='100'>ID</th>";
 echo "<th width='100'>Name</th>";
 echo "<th width='100'>Class</th>";
 echo "<th width='100'>Section</th>";
 echo "</tr>";
 while($row = mysqli_fetch_array($result)){
 echo "<tr bgcolor='white' align='center'>";
 echo "<td bgcolor='lightpink'>" . $row['student_id'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['class'] . "</td>";
 echo "<td>" . $row['section'] . "</td>";
 echo"<td></td>";
 echo "</tr>";
 }
 echo "</table>";
 // Free result set
 mysqli_free_result($result);
 } else{
    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
 }
 } else{
 echo "Oops! Something went wrong. Please try again later.";
 }
 // Close connection
 mysqli_close($conn);
 ?>
 <br>
 <div>
   <a href="create.php" class="btn btn-success "><i class="fa fa-plus"></i> Add New Student</a>
   </div>
   <br>
   <div>
   <a href="update.php" class="btn btn-success "><i class="fa fa-plus"></i> Update</a>
   </div>
   <br>
   <div>
   <a href="delete.php" class="btn btn-success "><i class="fa fa-plus"></i> Delete</a>
   </div>
   <br>
   </center>
</body>
</html>