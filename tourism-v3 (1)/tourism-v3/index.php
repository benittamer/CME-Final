<!DOCTYPE html>
<html>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">

   



      
      <style>
    
        :root {
        
        /**
         * colors
         */
        
        --united-nations-blue: hsl(214, 56%, 58%);
        --bright-navy-blue: hsl(214, 57%, 51%);
        --spanish-gray: hsl(0, 0%, 60%);
        --black-coral: hsl(225, 8%, 42%);
        --oxford-blue: hsl(208, 97%, 12%);
        --yale-blue: hsl(214, 72%, 33%);
        --blue-ncs: hsl(197, 100%, 36%);
        --gunmetal: hsl(206, 34%, 20%);
        --gainsboro: hsl(0, 0%, 88%);
        --cultured: hsl(0, 0%, 98%);
        --white: hsl(0, 0%, 100%);
        --black: hsl(0, 0%, 0%);
        --onyx: hsl(0, 0%, 25%);
        --jet: hsl(0, 0%, 20%);
        /**
         * typography
         */
        
        --ff-poppins: "Poppins", sans-serif;
        --ff-montserrat: "Montserrat", sans-serif;
        
        --fs-1: calc(20px + 3.5vw);
        --fs-2: calc(18px + 1.6vw);
        --fs-3: calc(16px + 0.45vw);
        --fs-4: 15px;
        --fs-5: 14px;
        --fs-6: 13px;
        --fs-7: 12px;
        --fs-8: 11px;
        
        --fw-500: 500;
        --fw-600: 600;
        --fw-700: 700;
        --fw-800: 800;
        
        /**
         * transition
         */
        
        --transition: 0.25s ease-in-out;
        
        /**
         * spacing
         */
        
        --section-padding: 60rem;
        
        /**
         * border-radius
         */
        
        --radius-15: 15px;
        --radius-25: 25px;
        
        }
        
        
        
        
        
        /*-----------------------------------*\
        * #RESET
        \*-----------------------------------*/
        
        *, *::before, *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
      
        
        li { list-style: none; }
        
        a { text-decoration: none; }
        
        a,
        img,
        span,
        input,
        label,
        button,
        ion-icon { display: block; }
        
        input,
        button {
        background: none;
        border: none;
        font: inherit;
        }
        
        button
         { cursor: pointer; }
        
        input
         { width: 100%; }
        
        ion-icon { pointer-events: none; }
        
        html {
        font-family: var(--ff-poppins);
        scroll-behavior: smooth;
        }
        
        body {
        background-color:hsl(198deg, 100%, 6%);
        }
        
        
        
        /*-----------------------------------*\
        * #REUSED STYLE
        \*-----------------------------------*/
        
        .container 
        {
             padding-inline: 15px;
         }
        
        .btn-primary {
        background: var(--bright-navy-blue);
        border-color: var(--bright-navy-blue);
        }
        
        .btn-primary:is(:hover, :focus) {
        background: var(--yale-blue);
        border-color: var(--yale-blue);
        }
        
        .btn-secondary { border-color: black; }
        
        .btn-secondary:is(:hover, :focus)
         { background: hsla(0, 0%, 100%, 0.1); }
        
        .h1,
        .h2,
        .h3 {
        font-weight: var(--fw-800);
        font-family: var(--ff-montserrat);
        text-transform: uppercase;
        }
        
        .h1 {
        color: white;
        font-size: var(--fs-1);
        }
        
        .h2,
        .h3 { color: var(--gunmetal); }
        
        .h2 { font-size: var(--fs-2); }
        
        .h3 {
        font-size: var(--fs-3);
        font-weight: var(--fw-700);
        }
        
        .section-subtitle {
        color: var(--bright-navy-blue);
        font-size: var(--fs-5);
        text-transform: uppercase;
        font-family: var(--ff-montserrat);
        margin-bottom: 8px;
        }
        
        .section-title { margin-bottom: 15px; }
        
        .section-text {
        color: var(--black-coral);
        margin-bottom: 30px;
        }
        
        .card-text {
        color: var(--black-coral);
        font-size: var(--fs-5);
        }
        
        
        .header {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          padding-top: 61px;
          z-index: 4;
        }
        
        .header-top {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          transition: var(--transition);
          border-bottom: 1px solid hsla(0, 0%, 100%, 0.1);
          padding-block: 110px;
          z-index: 1;
        }
        
        .header.active .header-top {
          position: fixed;
          background:white;
        }
        
        .header-top .container {
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          justify-items: flex-start;
          align-items: center;
        }
        
        .helpline-box .wrapper
         { display: none; }
        
        .helpline-box .icon-box {
          background: var(--bright-navy-blue);
          padding: 6rem;
          border-radius: 50%;
          color: var(--white);
        }
        
        .helpline-box .icon-box ion-icon
         { --ionicon-stroke-width: 40px; }
        
        .header-top .logo
         { margin-inline: auto; }
        
        .header-top .logo img 
        { max-width: 100px; }
        
        .header-btn-group {
          justify-self: flex-end;
          display: flex;
          align-items: center;
          gap: 10px;
          color: black;
        }
        
        .search-btn,
        .nav-open-btn {
          font-size: 30px;
          color: inherit;
        }
        
        .search-btn { font-size: 20px; }
        
        .header-bottom { border-bottom: 1px solid hsla(0, 0%, 100%, 0.1); }
        
        .header-bottom .container {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding-block: 15px;
        }
        
        .social-list {
          display: flex;
          align-items: center;
          gap: 5px;
        }
        
        .header .btn
         { 
            --padding: 4px 20px;
         }
        
        .header .navbar {
          position: fixed;
          top: 0;
          right: -300px;
          width: 100%;
          max-width: 300px;
          height: 100%;
          background: black;
          visibility: hidden;
          pointer-events: none;
          transition: 0.15s ease-in;
          z-index: 3;
        }
        
        .navbar.active {
          right: 0;
          visibility: visible;
          pointer-events: all;
          transition: 0.25s ease-out;
        }
        
        .navbar-top {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 40px 15px;
        }
        
        .navbar-top .logo img
         { width: 15rem; }
        
        .nav-close-btn {
          font-size: 20px;
          color: var(--bright-navy-blue);
        }
        
        .nav-close-btn ion-icon 
        { --ionicon-stroke-width: 80px; }
        
        .navbar-list 
        {
             border-top: 1px solid hsla(0, 0%, 0%, 0.1);
             }
        
        .navbar-list li 
        {
             border-bottom: 1px solid hsla(0, 0%, 0%, 0.1); }
        
        .navbar-link {
          padding: 15px 20px;
          color: hsla(0, 0%, 0%, 0.1);
          font-weight: var(--fw-500);
          font-size: var(--fs-4);
          transition: var(--transition);
          text-transform: capitalize;
        }
        
        .navbar-link:is(:hover, :focus) { color: var(--bright-navy-blue); }
        
        .overlay {
          position: fixed;
          inset: 0;
          background: var(--black);
          opacity: 0;
          pointer-events: none;
          z-index: 2;
          transition: var(--transition);
        }
        
        .overlay.active {
          opacity: 0.7;
          pointer-events: all;
        }
        
        
        .hero {
          background-image: url("images/iban.jpg");
          background-repeat: no-repeat;
          background-size: 100rem;
          background-position: center;
          background-blend-mode: overlay;
          background-color: hsl(0, 0%, 25%);;
          display: grid;
          place-items: center;
          height: 10rem;
          text-align: center;
          padding-top: 125rem;
        }
        
        .hero-title
         { margin-bottom: 20px; }
        
        .hero-text {
          color: white;
          font-size: var(--fs-5);
          margin-bottom: 40px;
        }
        
        .btn-group {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
          gap: 10px;
        }
        
        
        .tour-search {
          background: var(--bright-navy-blue);
          padding-block: var(--section-padding);
        }
        
        .tour-search-form .input-label {
          color: var(--white);
          font-size: var(--fs-4);
          margin-left: 20px;
          margin-bottom: 10px;
        }
        
        .tour-search-form .input-field {
          background: var(--white);
          padding: 10px 15px;
          font-size: var(--fs-5);
          border-radius: 50px;
        }
        
        .tour-search-form .input-field::placeholder { color: var(--spanish-gray); }
        
        .tour-search-form .input-field::-webkit-datetime-edit {
          color: var(--spanish-gray);
          text-transform: uppercase;
        }
        
        .tour-search-form .input-wrapper { margin-bottom: 15px; }
        
        .tour-search .btn {
          width: 100%;
          --border-width: 1px;
          font-weight: var(--fw-600);
          margin-top: 35px;
        }
        
        
        .go-top {
          position: fixed;
          bottom: 15rem;
          right: 15px;
          width: 35px;
          height: 35px;
          background: var(--bright-navy-blue);
          color: var(--white);
          display: grid;
          place-items: center;
          font-size: 18px;
          border-radius: 6px;
          box-shadow: 0 1px 3px hsla(0, 0%, 0%, 0.5);
          opacity: 0;
          transform: translateY(10px);
          visibility: hidden;
          transition: var(--transition);
        }
        
        .go-top.active {
          opacity: 0.8;
          transform: translateY(0);
          visibility: visible;
        }
        
        .go-top:is(:hover, :focus) { opacity: 1; }
        
        
        @media (min-width: 580px) 
        {}
        
        .container {
          max-width: 580px;
          margin-inline: auto;
        }
        
        .btn {
          --fs-5: 16px;
          --padding: 12px 30px;
        }
        
        section:not(.cta) :is(.section-subtitle, .section-title, .section-text) {
          text-align: center;
        }
        
        .section-text { margin-bottom: 40px; }
        
        .card-text { --fs-5: 15px; }
        
        
        
        /**
         * HEADER
         */
        
        .header { padding-top: 83px; }
        
        .helpline-box .icon-box { padding: 14px; }
        
        .header-top .logo img { max-width: unset; }
        
        .search-btn { font-size: 30px; }
        
        .nav-open-btn { font-size: 40px; }
        
        .header .btn {
          --fs-5: 14px;
          --padding: 6px 20px;
        }
        
        .hero {
            min-height: 800px;
            padding-top: 85px;
          }
        
          .hero-text { --fs-5: 15px; }
        
          .btn-group { gap: 20px; }
        
        
          .tour-search-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: flex-end;
            gap: 15px;
          }
        
          .tour-search-form .input-wrapper { margin-bottom: 0; }
        
          .tour-search-form .input-field { padding: 16px 20px; }
        
          .tour-search .btn {
            grid-column: span 2;
            margin-top: 20px;
          }
        
          
        @media (min-width: 768px) {}
        
        /**
         * CUSTOM PROPERTY
         */
        
        :root {
        
          /**
           * typography
           */
        
          --fs-5: 15px;
        
        }
        
        .container { max-width: 800px; }
        
        .section-text {
          max-width: 60ch;
          margin-inline: auto;
        }
        
        .helpline-box {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
          }
        
          .helpline-box .wrapper {
            display: block;
            color: var(--white);
            font-size: var(--fs-6);
          }
        
          .social-list { gap: 10px; }
        
        
          @media (min-width: 992px) {}
        
        /**
         * REUSED STYLE
         */
        
        .container { max-width: 1050px; }
        
        
        .header.active .header-top {
            position: unset;
            background: unset;
          }
        
          .nav-open-btn,
          .navbar-top { display: none; }
        
          .header-bottom { border-bottom: none; }
        
          .header.active .header-bottom {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            color: var(--onyx);
            box-shadow: 0 2px 5px hsla(0, 0%, 0%, 0.08);
            transition: var(--transition);
          }
        
          .header-bottom .container
           {
             padding-block: 0; 
            }
        
          .header .navbar
           { 
            
            all: unset;
         }
        
          .navbar-list {
            border-top: none;
            display: flex;
            justify-content: center;
            align-items: center;
          }
        
          .navbar-list li 
          {
             border-bottom: none; 
            }
        
          .navbar-link {
            color: white;
            --fs-4: 16px;
            font-weight: unset;
            text-transform: uppercase;
            padding: 20px 15px;
            
          }
        
          .header.active .navbar-link { color: var(--onyx); }
        
          .header.active .navbar-link:is(:hover, :focus) { color: var(--bright-navy-blue); }
        
          .header.active .social-link {
            color: var(--onyx);
            border-color: hsla(0, 0%, 0%, 0.15);
          }
        
          .overlay { display: none; }
        
          .hero .container { max-width: 740px; }
        
          .tour-search-form { grid-template-columns: repeat(5, 1fr); }
        
          .tour-search .btn {
            --padding: 15px;
            grid-column: unset;
            margin-top: 0;
          }
        
          @media (min-width: 1200px) {
        
        /**
         * CUSTOM PROPERTY
         */
        
        :root {
        
          /**
           * spacing
           */
        
          --section-padding: 100px;
        
        }
        
        
        
        /**
         * REUSED STYLE
         */
        
        .container { max-width: 1180px; }
        
        }
        
            </style>
            <?php
         include 'db/db_connection.php';
                    $conn = OpenCon();
                    //echo "Connected Successfully";
                    
                    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
     $page = end($link_array);
        $available_places = array('mysore','ooty','Rameshwaram');
        
        
        if(in_array($page, $available_places))
        {
            $sql = "SELECT * FROM tbl_packages where destination = '$page'";
                    
        }
        else
        {
            $sql = "SELECT * FROM tbl_packages where status = 1";
        }
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    
                    CloseCon($conn);
                    
                    ?>

        
          <header class="header" data-header>
        
        
                <ul class="navbar-list">
        
                    <li>
                      <a href="index.html" class="navbar-link" data-nav-link>home</a>
                    </li>
        
                    <li>
                      <a href="about.html" class="navbar-link" data-nav-link>about </a>
                    </li>
        
                    <li>
                      <a href="blog.html" class="navbar-link" data-nav-link>Blog</a>
                    </li>
        
                    <li>
                      <a href="contact.html" class="navbar-link" data-nav-link>contact us</a>
                    </li>
        
                  </ul>
        
                </nav>
        
        
        
        
        
        
        
        
        
        
              </div>
            </div>
        
          </header>
        
        <style>
          .hero-title{
            color: white;
            font-style:normal;
          }
          .hero-text{
            font-size: large;
            font-weight: bolder;
            color: aquamarine;
          }
        
        </style>
          <main>
            <article>
         <!-- 
                - #HERO
              -->
        
              <section class="hero" id="home">
                <div class="container">
        <?php //print_r($row); ?>
                  <h2 class="h1 hero-title" ><?=$row['Destination']; ?></h2>
        
                  <p class="hero-text">                    
                    <?=$row['description']; ?>

                  </p>
        
                  
                </div>
              </section>



<style> 
  :root{
  --green: #1ec6b6;
  --light-grey: #f7f7f7;
  --dark: #0e1010;
  --trans: all 0.3s ease-in-out;
  --oxford-blue :var(--oxford-blue)
  
} 
.navbar{
  position: fixed;
  top: 0;
  width: 100%;
  background-color: white;
  padding: 2px; /*topic height*/
  z-index: 999;
  padding-top: 0.3rem;
}
.navbar .container{
  box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.site-brand{
  color: rgb(0, 153, 153);;
  font-size: 2.4;
  font-family: 'Raleway', sans-serif;
  font-weight: 600;
  font-size: 30px;
  font-weight: bold;
  font-family:'Times New Roman', Times, serif;
  opacity: 0.95;
}
.site-brand span{
  font-weight: 300;
}
#navbar-show-btn{
  background: transparent;
  color: rgb(0, 153, 153);
  font-size: 2;
  opacity: 0.9;
  transition: var(--trans);
  -o-transition: var(--trans);
  transition: var(--trans);
  border: none;
}
#navbar-show-btn:hover{
  opacity: 1;
}

/* navbar  width space */
#navbar-collapse{
  background-color: var(--trans );
  position: fixed;
  top: 0;
  right: 0;
  width: 10px;
  height: 100%;
  padding: 20px;
  line-height: 40px;
  -webkit-transform: translateX(100%);
      -ms-transform: translateX(100%);
          transform: translateX(100%);
  transition: var(--trans);
  -o-transition: var(--trans);
  transition: var(--trans);
}
.navbar-collapse-rmw{
  /* js related */
      transform: translateX(0)!important;
      -ms-transform: translateX(0)!important;
          transform: translateX(0)!important;
}
#navbar-close-btn{
  background: none;
  color: white;
  width: 55px;
  height: 35px;
  border-radius: 0.2;
  font-size: 2;
  transition: var(--trans);
  -o-transition: var(--trans);
  transition: var(--trans);
  position: absolute;
  right: 1;
  top: 2;
  border: none;
}
#navbar-close-btn:hover{
  background-color: #fff;
  color: var(--green);
}
.navbar-nav{
  margin-top: 5;
}
.nav-item{
  margin: 1.6;
}
.nav-link{
  color:blue;   
  font-size: 2;
  font-weight: 600;
  font-size: 20px;
  font-weight: bold;
  font-family:'Times New Roman', Times, serif;
  -webkit-transition: var(--trans);
  -o-transition: var(--trans);
  transition: var(--trans);
}
.nav-link:hover{
  opacity: 0.8;
}

</style>

<style>
:root {

/**
 * colors
 */

--united-nations-blue: hsl(214, 56%, 58%);
--bright-navy-blue: hsl(214, 57%, 51%);
--spanish-gray: hsl(0, 0%, 60%);
--black-coral: hsl(225, 8%, 42%);
--oxford-blue: hsl(208, 97%, 12%);
--yale-blue: hsl(214, 72%, 33%);
--blue-ncs: hsl(197, 100%, 36%);
--gunmetal: hsl(206, 34%, 20%);
--gainsboro: hsl(0, 0%, 88%);
--cultured: hsl(0, 0%, 98%);
--white: hsl(0, 0%, 100%);
--black: hsl(0, 0%, 0%);
--onyx: hsl(0, 0%, 25%);
--jet: hsl(0, 0%, 20%);


background-color:hsl(198deg, 100%, 6%);
/**
 * typography
 */

--ff-poppins: "Poppins", sans-serif;
--ff-montserrat: "Montserrat", sans-serif;

--fs-1: calc(20px + 3.5vw);
--fs-2: calc(18px + 1.6vw);
--fs-3: calc(16px + 0.45vw);
--fs-4: 15px;
--fs-5: 14px;
--fs-6: 13px;
--fs-7: 12px;
--fs-8: 11px;

--fw-500: 500;
--fw-600: 600;
--fw-700: 700;
--fw-800: 800;

/**
 * transition
 */

--transition: 0.25s ease-in-out;

/**
 * spacing
 */

--section-padding: 60px;

/**
 * border-radius
 */

--radius-15: 15px;
--radius-25: 25px;

}

.package
 { 
  padding-block: var(--section-padding);
   }

.package-list {
   margin-bottom: 40rem; 
  }

.package-list > li:not(:last-child) { margin-bottom: 30px; }

.package-card {
  background: var(--cultured);
  overflow: hidden;
  border-radius: 10px;
}

.package-card .card-banner 
{ 
  height: 250px; 
}

.package-card .card-banner img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.package-card .card-content 
{ padding: 30rem; 
  color: white;
}

.package-card .card-title 
{ 
  margin-bottom: 30px; 
  color: white;
}

.package-card .card-text {
  line-height: 1.6;
  margin-bottom: 20px;
  color: white;
}

.card-meta-list {
  background: var(--white);
  max-width: max-content;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 8px;
  box-shadow: 0 0 5px hsla(0, 0%, 0%, 0.15);
  border-radius: 50px;
}

.card-meta-item { position: relative; }

.card-meta-item:not(:last-child)::after {
  content: "";
  position: absolute;
  top: 4px;
  right: -1px;
  bottom: 4px;
  width: 1px;
  background: hsla(0, 0%, 0%, 0.3);
}

.meta-box {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
  padding-inline: 9px;
  color: var(--black-coral);
  font-size: 1rem;
}

.meta-box > ion-icon {
  color: blue;
  font-size: 13px;
}

.package-card .card-price {
  background-color: hsl(198deg, 100%, 6%);
  color: var(--white);
  padding: 4rem;
  text-align: center;
  gap: 1rem;
}

.package-card .card-price .wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 5px 15px;
  margin-bottom: 10px;
}

.package-card .card-price .reviews 
{
   font-size: var(--fs-5);
   gap: 10rem;
  }

.package-card .card-rating {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 1px;
  font-size: 140rem;
  margin-bottom: 4rem;
}

.package-card .card-rating ion-icon:last-child { color: hsl(0, 0%, 80%); }

.package-card .price {
  font-size: var(--fs-2);
  font-family: var(--ff-montserrat);
  font-weight: var(--fw-800);
  margin-bottom: 20px;
  gap: 1rem;
  color: white;
  font-size: 1;

}

.package-card .price span {
  font-size: var(--fs-7);
  font-weight: initial;
}

.package .btn
 { margin-inline: auto;
   font-weight: bolder;
   color: white;
   background-color: #1ec6b6;
   width: 90%;
   height: 3rem;
}
.package .button
 { margin-inline: auto;
   font-weight: bolder;
   background-color: #1ec6b6;
   color: black;
   width: 90%;
   /*height: 5rem;*/
   text-align: center;
}


.package-list { margin-bottom: 50px; }

.package-list > li:not(:last-child) { margin-bottom: 40px; }

.package-card {
  display: grid;
  grid-template-columns: 1.3fr 1.5fr 1fr;
 background-color:  hsl(198deg, 100%, 6%);
}

.package-card .card-banner { height: 100%; }

.package-card .card-content {
   padding: 4rem;
  color: white; }

.package-card .card-price {
  display: grid;
  place-content: center;
  margin-top: 2rem;
  font-weight: bold;

}

.package-card .card-price .wrapper
 { 
  margin-bottom: 150px;
 }




.meta-box { --fs-8: 13px; }

.meta-box > ion-icon { font-size: 15px; }

.section-title{
  text-align: center;
  color: white;
  margin-bottom: 12rem;
}
.price-title{
color: white;
font-size: large;
margin-top: 1rem;
}

  </style>
 
 
 
 
 
 
 
 <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">


          

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="../images/<?=$row['banner'] ?>" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  

                  <p class="card-text">
                    <?=$row['content'] ?>
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text"><?=$row['day-night'] ?></p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">max: <?=$row['max_people'] ?></p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text"><?=$row['Destination'] ?></p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                <p class="content">
                    Trip To <?=$row['Destination'] ?>
                  <p class="price">
                    ₹<?=$row['amount'] ?>
                    <span>/ per person</span>
                  </p>

                   
                  <a href="../register.php?package=<?=$row['id']?>" class="button">BOOK NOW</a>
                

                </div>

              </div>
            </li>


  



            <style>
              .section-subtitle h1{
              color: white;
              line-height: 2.5;
              margin-bottom: 1px;
                gap: 1rem;
                display: flex;
                padding-left: 1em;
                font-size: 2rem;
                font-style: italic;
                text-align: center;
                text-decoration: underline;
                margin-top: 100px;
              }
              .section-subtitle p{
              color: aquamarine;
              line-height: 3.9;
                display: block;
                margin-top: 10rem;
                gap: 10rem;
                display: flex;
                padding-right:1em;
                font-size: 1rem;
                font-style: italic;
                text-align: center;
                margin-bottom: 0;
                margin-top: 1em;
                padding-bottom: 0;
              
              }
              .fa-subtitle1{
              color: aquamarine;
              margin-top: 1rem;
              margin-left: 1rem;
              text-align: center;
              font-size: 2rem;
              margin-bottom: 20px;
              }
              </style>
              <section>
              <div class="section-subtitle">
              
                <h1>OVERVIEW</h1>   
              
                 <p><?=$row['overview'] ?></p>.  
                
              </div>
              </section>
              
              
              
              
              
              
              </section>
              
              
              


              <style>
                * {
                margin: 0;
                padding: 0;
                font-family: montserrat, sans-serif;
                box-sizing: border-box;
                }
                
                .button-container {
                display: flex;
                width: 100%;
                min-height: 10vh;
                justify-content: center;
                align-items: center;
                margin-top:2rem;
                }
                
                .button {
                appearance: none;
                background: none;
                border: none;
                outline: none;
                
                padding: 20px 40px;
                border-radius: 8px;
                color: #212121;
                font-size: 20px;
                font-weight: 50;
                margin: 0 15px;
                cursor: pointer;
                transition: 0.4s;
                }
                
                
                .button-1 {
                color: black;
                border: 3px solid aquamarine;
                
                color: #68DEA0;
                border: 3px solid #68DEA0;
                
                
                }
                
                .button-1:hover {
                color: #FFF;
                background-color: #FFCE00;
                background-position: 100%;
                }
                
                
                .button-2 {
                color: aquamarine;
                border: 3px solid aquamarine;
                background-image: linear-gradient(to right, transparent 50%, #FE4880 50%);
                background-size: 200%;
                background-position: 0%;
                }
                
                .button-2:hover {
                color: #FFF;
                background-position: 100%;
                }
                
                .button-3 {
                color: #68DEA0;
                border: 3px solid #68DEA0;
                background-image: linear-gradient(to top, #68DEA0 50%, transparent 50%);
                background-size: 100% 200%;
                background-position: 0% 0%;
                font-size: 0.9rem;
                text-align: center;
                font-weight: bolder;
                
                }
                
                .button-3:hover {
                color: white;
                background-position: 0% 100%;
                }
                
                .button-4 {
                color: #FFF;
                border: 3px solid #68DEA0;
                box-shadow:inset 0 -8px 0 0 rgba(0,0,0,0.17);
                transition: 0.1s;
                text-shadow: 0px 3px rgba(0,0,0,0.17);
                }
                
                .button-4:hover {
                box-shadow:inset 0 -6px 0 0 rgba(0,0,0,0.17);
                text-shadow: 0px 2px rgba(0,0,0,0.17);
                }
                
                .button-4:active {
                box-shadow:inset 0 0px 0 0 rgba(0,0,0,0.17);
                text-shadow: 0px 0px rgba(0,0,0,0.17);
                }
                
                .button-5 {
                position: relative;
                }
                
                .button-5:after {
                content: '';
                position: absolute;
                width: 0;
                height: 0;
                bottom: 0;
                right: 0;
                border-bottom: 3px solid #212121;
                border-right: 3px solid #212121;
                transition: all 0.4s, opacity 0.1s 0.4s;
                opacity: 0;
                }
                
                .button-5:before {
                content: '';
                position: absolute;
                width: 0;
                height: 0;
                top: 0;
                left: 0;
                border-top: 3px solid #212121;
                border-left: 3px solid #212121;
                transition: all 0.4s, opacity 0.1s 0.4s;
                opacity: 0;
                }
                
                .button-5:hover:after, .button-5:hover:before {
                width: calc(100% + 15px);
                height: calc(100% + 15px);
                transition: all 0.4s, opacity 0.1s;
                opacity: 1;
                }
                .fa-subtitle{
                color: white;
                margin-top: 1rem;
                margin-left: 1rem;
                text-align: center;
                font-size: 2rem;
                padding-top: 0;
                
                }
                .fa-subtitle h1{
                color: white;
                margin-top: 10rem;
                margin-left: 1rem;
                text-align: center;
                font-size: 2rem;
                text-decoration:underline;
                }
                </style>
                
                <section>
                  <div class="fa-subtitle">
                <h1>FACILITIES</h1>
                <div class="button-container">
                
                  <button class="button button-1">FLIGHT</button>
                  <button class="button button-2">MEALS</button>
                  <button class="button button-3">BREAKFAST</button>
                  <button class="button button-3">SIGHTSEEING</button>
                </div>
                
                
                <style>
                
                  .gallery { padding-block: var(--section-padding); 
                   margin-bottom: 150px;
                  }
                  
                  .gallery-list {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 10px;
                  }
                  
                  .gallery-image {
                    width: 100%;
                    height: 100%;
                    border-radius: var(--radius-15);
                    overflow: hidden;
                  }
                  
                  .gallery-item:nth-child(3) { grid-area: 1 / 2 / 3 / 3; }
                  
                  .gallery-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                  }
                  .gallery { padding-bottom: calc(var(--section-padding * 2)); }
                  
                  .gallery-list {
                    grid-template-columns: repeat(3, 1fr);
                    gap: 20px;
                  }
                  
                  .gallery-image { 
                    border-radius: var(--radius-25);
                    margin-top: 0;
                    line-height: 0;
                    margin-top: 3rem;
                    padding: 0;
                    height: 1;
                   }
                  
                  .section-title{
                    font-weight: bolder;
                    color: white ;
                    font-size: larger;
                    margin-left: 20px;
                    margin-bottom: 0;
                    line-height: 0;
                    padding: 0;
                  }
                    </style>
                  
                  
                  
                  
                  <section>
                    
                  
                  
                        <!-- 
                          - #GALLERY
                        -->
                  
                        <section class="gallery" id="gallery">
                          <div class="container">
                  
                            <h2 class="h2 section-title">Photo's From Travellers</h2>
                  
                  
                            <ul class="gallery-list">
                  
                              <li class="gallery-item">
                                <figure class="gallery-image">
                                  <img src="../images/gaooty.jpg" alt="Gallery image">
                                </figure>
                              </li>
                  
                              <li class="gallery-item">
                                <figure class="gallery-image">
                                  <img src="../images/gaooty2.jpg" alt="Gallery image">
                                </figure>
                              </li>
                  
                              <li class="gallery-item">
                                <figure class="gallery-image">
                                  <img src="../images/gaooty3.jpg"  alt="Gallery image">
                                </figure>
                              </li>
                  
                              <li class="gallery-item">
                                <figure class="gallery-image">
                                  <img src="../images/gaooty4.jpg"  alt="Gallery image">
                                </figure>
                              </li>
                  
                              <li class="gallery-item">
                                <figure class="gallery-image">
                                  <img src="../images/ga5.jpg"  alt="Gallery image">
                                </figure>
                              </li>
                  
                            </ul>
                  
                          </div>
                        </section>
                


      

<style>
  
.footer-top {
  background: var(--gunmetal);
  padding-block: var(--section-padding);
  color: var(--gainsboro);
}

.footer-brand { margin-bottom: 30px; }

.footer-brand img { width: 180px; }

.footer-brand .logo { margin-bottom: 20px; }

.footer-text {
  font-size: var(--fs-5);
  line-height: 1.7;
}

.footer-contact { margin-bottom: 30px; }

.contact-title {
  position: relative;
  font-family: var(--ff-montserrat);
  font-weight: var(--fw-500);
  margin-bottom: 30px;
  margin-right: 160px;
}

.contact-title::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 50px;
  height: 2px;
  background: var(--bright-navy-blue);
}

.contact-text {
  font-size: var(--fs-5);
  margin-bottom: 15px;
  max-width: 200px;
}

.contact-item {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  gap: 10px;
  margin-bottom: 10px;
}

.contact-item ion-icon { --ionicon-stroke-width: 40px; }

.contact-link,
address {
  font-style: normal;
  color: var(--gainsboro);
  font-size: var(--fs-5);
}

.contact-link:is(:hover, :focus) { color: var(--white); }

.form-text {
  font-size: var(--fs-5);
  margin-bottom: 20px;
}

.footer-form .input-field {
  background: var(--white);
  font-size: var(--fs-5);
  padding: 15px 20px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.footer-form .btn { width: 100%; }

.footer-bottom {
  --gunmetal: hsl(205, 36%, 17%);
  background: var(--gunmetal);
  padding-block: 20px;
  text-align: center;
}

.copyright {
  color: var(--gainsboro);
  font-size: var(--fs-5);
  margin-bottom: 10px;
}

.copyright a {
  color: inherit;
  display: inline-block;
}

.copyright a:is(:hover, :focus) { color: var(--white); }

.footer-bottom-list {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 21px;
}

.footer-bottom-list > li { position: relative; }

.footer-bottom-list > li:not(:last-child)::after {
  content: "";
  position: absolute;
  top: 3px;
  right: -10px;
  bottom: 3px;
  width: 1px;
  background: hsla(0, 0%, 100%, 0.2);
}

.footer-bottom-link {
  color: var(--gainsboro);
  font-size: var(--fs-7);
  transition: var(--transition);
}

.footer-bottom-link:is(:hover, :focus) { color: var(--white); }

.footer .container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
  }

  .footer-form { grid-column: span 2; }

  .footer-bottom { text-align: left; }

  .copyright { margin-bottom: 0; }

  .footer-bottom-list { justify-content: flex-end; }


  .form-wrapper {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
  }

  .footer-form .input-field { margin-bottom: 0; }

  .footer-form .btn { width: max-content; }


  .footer-top .container {
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
  }

  .footer-form { grid-column: unset; }

  .form-wrapper { flex-direction: column; }

  .footer-form .btn { width: 100%; }
 
  .footer-title-h{
    margin-top: 100px;
    padding-top: 100px;
    margin-right: 120rem;

    padding-left: 20px;
  }






  </style>
        


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          
     
          <h class="footer-title">
            GETSETGO
          </h>

          <p class="footer-text">
            Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla, praesentium magna conubia
            at
            perferendis, pretium, aenean aut ultrices.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>3146 Koontz, California</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Subscribe our newsletter for more update & news !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

  

        </ul>

      </div>
    </div>

  </footer>





                
                
                
                        
                
                 
                    
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                              



