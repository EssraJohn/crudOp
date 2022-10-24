<?php
include 'config.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Student Details Update</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">


 </head>
<body >
	<center>
		<br><br><br>
		<h4><strong> The Record to be Updated</strong></h4>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table bgcolor="grey" width="400">
	  <tr bgcolor="orange">
	    <td width='100'> ID</td>
		<td width='100'> Name</td>
		<td width='100'>Class</td>
		<td width='100'>Section</td>
		<td width='100'>Action</td>	  
	</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td ><?php echo $row["student_id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["class"]; ?></td>
		<td><?php echo $row["section"]; ?></td>
		<td><a class="btn btn-primary" href="update-process.php?id=<?php echo $row["student_id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
	</center>
 </body>
</html>