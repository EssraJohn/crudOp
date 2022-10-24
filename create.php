<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Store Data</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
        <center>
         <h1>Storing Form data in Database</h1>
         <form action="insert.php", method="post">  
         <p>
               <label for="student_id"> Student Id:</label>
               <input type="text" name="student_id" id="student_id" placeholder="enter your id" required>
            </p>
            <p>
               <label for="firstName"> Name:</label>
               <input type="text" name="name" id="name" placeholder="enter your name" required>
            </p>
 
             
            <p>
               <label for="class">Class:</label>
               <input type="text" name="class" id="class" placeholder="enter your class" required>
            </p>
 
             
            <p>
               <label for="section">Section     :</label>
               <input type="text" name="section" id="section" placeholder="enter your section" required>
            </p>
 
            <input class="btn btn-primary"  type="submit" value="Submit">
         </form>
        </center>
   </body>
</html>