<?php error_reporting(0); ?>
<?php
include 'config.php';
if(count($_POST)>0) {
    //updating the data
mysqli_query($conn,"UPDATE student set student_id='" . $_POST['student_id'] . "', name='" . $_POST['name'] . "', class='" . $_POST['class'] . "', section='" . $_POST['section'] . "' WHERE student_id='" . $_POST['student_id'] . "'");
$message = "<h5><em>Record Modified Successfully</em></h5>";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE student_id='" . $_GET['student_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Student Details Update</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <center>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<h3 style="color:green"><u>UPDATE STUDENT DETAILS</u> </h3>
Student id: <br>
<input type="text" name="student_id"  value="<?php echo $row['student_id']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Class :<br>
<input type="text" name="class" class="txtField" value="<?php echo $row['class']; ?>">
<br>
Section :<br>
<input type="text" name="section" class="txtField" value="<?php echo $row['section']; ?>">
<br> <br>
<input class="btn btn-primary" type="submit" value="Submit">
<br> <br>
<div style="padding-bottom:5px;">
<p> To view Students details 
<a class="btn btn-primary" href="display.php" role="button">Student Details</a>
</div>
</p>
</center>
</form>
</body>
</html>


