<?php

   $connection = mysqli_connect('localhost','root','','forms_tr');

   if(isset($_POST['send'])){
      $destinationname = $_POST['destinationname'];
      $date = $_POST['date'];
      $price = $_POST['price'];

      $request = " insert into adventure(destinationname,date,price) values('$destinationname','$date','$price') ";
      mysqli_query($connection, $request);

      header('location:adventure.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>