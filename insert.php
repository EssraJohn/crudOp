<!DOCTYPE html>
<html>
 
<head>
    <title>Insert page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => demo
        $conn = mysqli_connect("localhost", "root", "", "demo");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
         
        // Taking all 4 values from the form data(input)
        $student_id=$_REQUEST['student_id'];
        $name =  $_REQUEST['name'];
        $class = $_REQUEST['class'];
        $section =  $_REQUEST['section'];
         
        // Performing insert query execution
        // table name is student
        $sql = "INSERT INTO student(student_id,name, class, section) VALUES ('$student_id','$name',
            '$class','$section')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
                $last_id = $conn->insert_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id;
 
            echo nl2br("\n$name\n $class\n ". "$section\n");
            header("location: display.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>