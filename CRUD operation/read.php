<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>More Details</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php
      if(isset($_GET["id"])) {
         $id = $_GET["id"];
         include "config.php";

         $sql = "SELECT * FROM students WHERE id=$id";
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_assoc($result);

         ?>
            <div class="formview">

               <div class="list">
                  <h2>Full Name</h2>
                  <p><?php echo $row["name"]; ?></p>
               </div>

               <div class="list">
                  <h2>Mobile Number</h2>
                  <p><?php echo $row["phone"]; ?></p>
               </div>

               <div class="list">
                  <h2>Age</h2>
                  <p><?php echo $row["age"]; ?></p>
               </div>

               <div class="list">
                  <h2>Gender</h2>
                  <p><?php echo $row["gender"]; ?></p>
               </div>

               <div class="list">
                  <h2>Faculty</h2>
                  <p><?php echo $row["faculty"]; ?></p>
               </div>

            </div>
         <?php
      }
   ?>
</body>
</html>