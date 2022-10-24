<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <center>
    <h2 class="">Deleting the record </h2>
    <h3> <p> To access the table click  <a href="display.php">Record</a> </p> </h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="delete"> Enter the id to be deleted:</label>
    <input type="text" name="student_id" id="id" placeholder="enter the id" >
    <br>
    <input type="submit" name="submit">
    <br>

<?php
require_once "config.php";
if(isset($_POST['submit']))
{
    $id=$_POST['student_id'];
$sql = "DELETE FROM student WHERE student_id =  ('".$id."')";
if ($conn->query($sql) === TRUE) {
 echo "\n <p><em> Record deleted successfully \n</em></p>";
} else {
 echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>
    </form>
    </center>
</body>

</html>