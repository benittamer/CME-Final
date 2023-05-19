<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>

      

<?php
//print_r($_POST);
include 'db/db_connection.php';
                    $conn = OpenCon();
                    //echo "Connected Successfully";
                    

                    

                    
$sql = "INSERT INTO tbl_users (first_name, last_name, email, phone, age, gender) values ('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[phone]', '$_POST[age]','$_POST[gender]')";


if ($conn->query($sql) === TRUE) {
  
  $last_id = $conn->insert_id; 
  if($last_id  > 0)
  {
    /*print '<pre>';
    print_r($_POST);
    print '</pre>';*/
    $current_date = date('Y-m-d h:m:s');
    $sqlpackage = "INSERT INTO tbl_booking (booking_on, starting_date, ending_date, user_id, package_id, no_of_people) values ('$current_date', '$_POST[starting_date]', '$_POST[ending_date]', '$last_id', '$_POST[package_id]','$_POST[no_of_people]')";
    
    if ($conn->query($sqlpackage) === TRUE) {
  
        $booking_id = $conn->insert_id;
        
        if($booking_id > 0)
        {
          ?>
          <h1>Success</h1> 
        <p>you are successfully booked. your booking id is <?=$booking_id?></p>
          <?php
            
        }
    }
  }

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
        


      </div>
    </body>
</html>

