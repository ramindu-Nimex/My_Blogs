// process.php

<?php
   include "config.php";

   if(isset($_POST['create'])) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $faculty = $_POST['faculty'];

      $sql = "INSERT INTO students(name, phone, age, gender, faculty) VALUES('$name','$phone','$age','$gender','$faculty')";
      $result = mysqli_query($conn,$sql);

      if($result) {
         header('location:view.php');
      }
      else {
         die(mysqli_error($conn));
      }
   }

   if(isset($_POST['update'])) {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $faculty = $_POST['faculty'];

      $sql = "UPDATE students SET name = '$name', phone = '$phone', age = '$age', gender = '$gender', faculty = '$faculty' WHERE id='$id'";
      $result = mysqli_query($conn,$sql);

      if($result) {
         header('location:view.php');
      }
      else {
         die(mysqli_error($conn));
      }
   }

   $conn->close();
?>