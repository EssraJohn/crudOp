<?php
//creating table in the database
include 'config.php';
//using student_id as primary key
$sql="CREATE TABLE student (
    student_id INT NOT NULL PRIMARY KEY , 
    name VARCHAR(100) NOT NULL,
    class VARCHAR(255) NOT NULL,
    section VARCHAR(10) NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
UPDATE CURRENT_TIMESTAMP
   )";
   if ($conn->query($sql) === TRUE) {
    echo "Table Students created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }
    $conn->close();
    ?>