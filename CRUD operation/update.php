// update.php

<?php
   include "config.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM students WHERE id=$id";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <section>
      <h1>Update Student Registration Form</h1>
      <form action="process.php" method="post">
         <div class="inputbox">
            <label for="">Full Name : </label>
            <input type="text" name="name" value='<?php echo $row['name']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Mobile Number : </label>
            <input type="text" name="phone" value='<?php echo $row['phone']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Age : </label>
            <input type="number" name="age" value='<?php echo $row['age']; ?>'>
         </div>

         <div class="inputbox">
            <label for="">Gender : </label>
            <select name="gender">
               <option value="">Select Gender</option>
               <option value="Male" <?php if($row['gender'] == "Male"){echo "selected";} ?>>Male</option>
               <option value="Female" <?php if($row['gender'] == "Female"){echo "selected";} ?>>Female</option>
               <option value="Others" <?php if($row['gender'] == "Others"){echo "selected";} ?>>Others</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Faculty : </label>
            <select name="faculty">
               <option value="">Select Faculty</option>
               <option value="Computing" <?php if($row['faculty'] == "Computing"){echo "selected";} ?>>Computing</option>
               <option value="Business" <?php if($row['faculty'] == "Business"){echo "selected";} ?>>Business</option>
               <option value="Engineering" <?php if($row['faculty'] == "Engineering"){echo "selected";} ?>>Engineering</option>
               <option value="Humanities & Science" <?php if($row['faculty'] == "Humanities & Science"){echo "selected";} ?>>Humanities & Science</option>
               <option value="Architecture" <?php if($row['faculty'] == "Architecture"){echo "selected";} ?>>Architecture</option>
            </select>
         </div>

         <div class="inputbox">
            <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
         </div>

         <div class="inputbox">
            <input type="submit" value="Update" name="update" class="formbtn">
        </div>
      </form>
   </section>
</body>
</html>