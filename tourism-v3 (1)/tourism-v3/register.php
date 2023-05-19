<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>
<body class="register-body">

  <style>
    nav{
    width: 100%;
    position: fixed;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 5rem;

    
}
nav ul li{
    list-style: none;
    display: inline-block;
    margin-left: 4px;
}

.navbar{
    display: flex;
    margin-right: 4vh;
    
}

.navbar a{
    color: white;
    font-size: 18px;
    padding: 10px 22px;
    border-radius: 4px;
    font-weight: 500;   
    text-decoration: none;
    transition: ease 0.40s;
}

.navbar a:hover,.navbar a.active{
    background: white;
    color: black;
    box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
    border-radius: 5px;
    
}

nav ul li a{
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-size: 17px;
}

  </style>
  
  
  
    <nav>
        <img src="./files/logo.png" class="logo" alt="Logo" title="FirstFlight Travels">

        <ul class="navbar">
            <li>
                <a href="index.html">Home</a>
                <a href="about.html">About us</a>
                <a href="package.html">Packages</a>
                <a href="blog.html">Blog</a>
                <a href="contact.html">Contact Us</a>
            </li>
        </ul>
    </nav>

<style>
    register-body{
    background-color: #101010;
    background-repeat: no-repeat;
    background-size: cover;

}
.registration{
    padding: 110px 30%;
    height: 100%;
    min-height: 100vh;
}
.register-form h1{
font-size: 80px;
    color:  #fc0050;
    margin-bottom: 20px;
}
.register-form h1 span{
    color: #fc0050;
}

.register-form{
    color: white;
    font-size: 20px;
}

.register-form form input{
    color: white;
    padding: 17px;
    background-color: #191919;
    font-size: 20px;
    outline: none;
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
    
}

.register-form h4{
    font-size: 22px;
    font-weight: 500;
    font-weight: bolder;
    margin-top: 20px;
    color: #fc0050;
}


.register-form form .submitbtn{
    display: inline-block;
    background-color: #fc0050;
    font-size: 27px;
    font-weight: 600px;
    border: 2px solid transparent;
    border-radius: 60px;
    width: 220px;
    cursor: pointer;
    transition: ease 0.30s;
}

.register-form form .submitbtn:hover{
    border: 2px solid #fc0050;
    background-color: transparent;
    transform: scale(1.1);
}


.location-body{
    background-color: black;
    color: white;
}

.location-section{
    padding: 110px;
    height: 100%;
    min-height: 100vh;
}

.location-heading h1{
    margin-top: 20px;
    font-size: 60px;
    margin-bottom: 20px;
}

.location-heading h1 span{
    color: #fc0050;
}

.location-detail h1{
    padding-top: 60px;
    color: #fc0050;
    font-size: 40px;
}
.location-detail {
    padding-top: 60px;
    color: white;
    font-size: 40px;
}

.location-detail p{
    font-size: 20px;
    margin-top: 40px;
    margin-bottom: 10px;
}

.location-img img{
    height: 400px;
    width: 400px;
    margin-top: 30px;
    margin-bottom: 30px;
}

.stars i{
    font-size: 20px;
    color: rgb(197, 167, 44);
}
body {
  background-color: black;
}

    </style>



    <section class="registration">
        <div class="register-form">
            <h1>Register <span>Here</span></h1>
            <form action="register_post.php" method="post" >
               

            <input type="text" name="first_name" placeholder="First Name" id="first_name" required>
            <input type="text" name="last_name" placeholder="Last Name" id="last_name" required>
            <input type="email" name="email" placeholder="Email-Id" id="email" required>
            <input type="tel" name="phone" placeholder="Phone No." id="phone" required>
            <input type="number" name="age" placeholder="Age" id="age" required>
            <input type="number" name="no_of_people" placeholder="number of people" id="no_of_people" required>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="Female">Female
            <h4>Departure</h4>
            <input type="date" name="starting_date" id="starting_date" onchange="calculate_return($(this).val())" required>
            <h4>Return</h4>
            <input type="date" name="ending_date" id="ending_date" required>
            <input type="hidden" name="package_id" value="<?=$_GET['package'] ?>">
            <!--<h4>Travel Destination</h4>
            <h5>FROM</h5>
            <input type="from place" name="toplace" id="" required>
            <h6>TO</h6>
            <input type="from place" name="toplace" id="" required>-->
            <br> <br>
    
            <input type="checkbox" name="t&c" id="" checked required> I accept the Terms & Conditions.
            <br> <br> 
            <script>
            document.getElementById('myForm').addEventListener('submit', function(event) {
                event.preventDefault(); // prevent the default form submission behavior
                // validate the form inputs and register the user
                window.location.href = 'success.html'; // redirect the user to the success page
              });
              </script>
           
            <input   href="./subooty.html"  type="submit" value="SUBMIT" class="submitbtn">

                
       
            

        </form>
        </div>
    </section>

    <script type="text/javascript">
        $(function () {
            $("#starting_date").datepicker({
                changeMonth: true,
                changeYear: true,
                showOn: 'button',
                buttonImageOnly: true,
                buttonImage: 'images/calendar.gif',
                dateFormat: 'dd/mm/yy',
                onSelect: function (dateString, txtDate) {
                    DisplayDate("Selected Date: " + dateString + "\nTextBox ID: " + txtDate.id);
                }
            });
        });
        function DisplayDate(message) {
            alert(message);
        };
    </script>
   
    <script>
   
 
function calculate_return(yearSelect)
{
    
    //const yearSelect = document.querySelector('#starting_date').value();
    alert(yearSelect);
    

}
        </script>


    
    
























   <!-- <!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
  </head>
  <body>
    <h1>Registration Form</h1>
    <form method="post" action="./subooty.html">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>-->