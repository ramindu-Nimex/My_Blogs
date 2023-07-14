// view.php

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Student Details</title>
   <link rel="stylesheet" href="css/view.css">
</head>
<body>
   <section>
      <div class="tableviewhead">
         <h1>Student Registration List</h1>
         <div class="left">
            <form action="search.php" method="post">
                <input type="text" placeholder="search data" name="search">
                <button name="submit">Search</button>
            </form>
            <a href="./create.php">Add</a>
         </div>
      </div>

      <table>
         <thead>
            <th>ID</th>
            <th>Full Name</th>
            <th>Contact Number</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Faculty</th>
            <th colspan="2">Action</th>
         </thead>

         <tbody>
            <?php
               include "config.php";
               $sql = "SELECT * FROM students";
               $result = mysqli_query($conn, $sql);

               while($row = mysqli_fetch_assoc($result)) {
                  ?>
                     <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["faculty"]; ?></td>

                        <td>
                           <a href="read.php?id=<?php echo $row["id"]; ?>" target="_blank" class="read">Read More</a>
                           <a href="update.php?id=<?php echo $row["id"]; ?>" target="_blank" class="update">Update</a>
                           <a href="delete.php?id=<?php echo $row["id"]; ?>" target="_blank" class="delete">Delete</a>
                        </td>
                     </tr>
                  <?php
               }
            ?>
         </tbody>
      </table>
   </section>
</body>
</html>