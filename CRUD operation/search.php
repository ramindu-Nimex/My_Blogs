// search.php

<?php
   include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Record data Search</title>
   <style>
      body {
         background-color: #1f242d;
         color: #a7a0a0;
      }
      
      table tr {
         text-align: center;
      }
   </style>
</head>
<body>
   <table border="1" width="100%">
      <?php
         if(isset($_POST['submit'])) {
            $search = $_POST['search'];

            $sql = "SELECT * FROM students WHERE id LIKE '$search' or name LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);

            if($result) {
               if(mysqli_num_rows($result) > 0) {
                  echo '<thead>
                    <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    </tr></thead>';

                  while($row = mysqli_fetch_assoc($result)) {
                     echo '<tbody>
                    <tr>
                    <td><a href="search.details.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                    <td>'.$row['name'].'</td>
                    </tr></tbody>';
                  }
               }
               else {
                  echo '<h2>Data not found</h2>';
               }
            }
         }
      ?>
   </table>
</body>
</html>