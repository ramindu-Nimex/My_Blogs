// create.php

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Records</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <section>
      <h1>Student Registration Form</h1>
      <form action="process.php" method="post">
         <div class="inputbox">
            <label for="">Full Name : </label>
            <input type="text" name="name" placeholder="Enter Full Name" required>
         </div>

         <div class="inputbox">
            <label for="">Mobile Number : </label>
            <input type="text" name="phone" placeholder="Enter Mobile Number" required>
         </div>

         <div class="inputbox">
            <label for="">Age : </label>
            <input type="number" name="age" placeholder="Enter Student Age" required>
         </div>

         <div class="inputbox">
            <label for="">Gender : </label>
            <select name="gender">
               <option value="">Select Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Others">Others</option>
            </select>
         </div>

         <div class="inputbox">
            <label for="">Faculty : </label>
            <select name="faculty">
               <option value="">Select Faculty</option>
               <option value="Computing">Computing</option>
               <option value="Business">Business</option>
               <option value="Engineering">Engineering</option>
               <option value="Humanities & Science">Humanities & Science</option>
               <option value="Architecture">Architecture</option>
            </select>
         </div>

         <div class="inputbox">
            <input type="submit" value="Submit" name="create" class="formbtn">
        </div>
      </form>
   </section>
</body>
</html>