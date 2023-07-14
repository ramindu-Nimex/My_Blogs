// search.details.php

<?php 
   include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Record data Search Details</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php
      $data = $_GET['data'];
      $sql = "SELECT * FROM students WHERE id=$data";
      $result = mysqli_query($conn, $sql);

      if($result) {
         $row = mysqli_fetch_assoc($result);

         echo '<div class="formview">
            <div class="list">
               <h2>Full Name</h2>
               <p>'.$row['name'].'</p>
            </div>

            <div class="list">
               <h2>Mobile Number</h2>
               <p>'.$row['phone'].'</p>
            </div>

            <div class="list">
               <h2>Age</h2>
               <p>'.$row['age'].'</p>
            </div>

            <div class="list">
               <h2>Gender</h2>
               <p>'.$row['gender'].'</p>
            </div>

            <div class="list">
               <h2>Faculty</h2>
               <p>'.$row['faculty'].'</p>
            </div>
         </div>';
      }
   ?>
</body>
</html>