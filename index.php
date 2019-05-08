<?php require_once('includes/init.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro|Roboto+Slab');
        </style>
    </head>
    <body>
         <div class ="header-container">
             <?php include('includes/header.php');?>
         </div>
         <div class="grey">
             <div class="main-container">
                 <?php include('includes/navigation.php'); ?>
                 <main class = "container">
                     <div class="row image">
                         <img src="images/hub.svg" alt="Hub">
                         <!--hub by NeMaria from the Noun Project CC license.  -->
                     </div>
                     <section class="col-1">

                         <h2>Home</h2>
                         <div class ="flex-container">
                             <div class="main-body">
                                 <?php include('includes/lorum.php');?>
                                 <?php include('includes/lorum.php');?>
                                 <?php include('includes/lorum.php');?>
                                 <?php include('includes/lorum.php');?>

                                 <?php
                                 if ($loggedState == false) {
                                 ?>
                                 <!--Only show button if not logged in  -->
                                 <a class="button-border" href='login.php'>   
                                    Log in <img src="images/arrow.svg" alt="arrow" class="arrow">
                                 </a>   
                                 <?php
                                 }
                                 ?>
                                 <div class="line">&nbsp;</div>
                             </div>
                             <div>
                                 <article class ="news-snippet">
                                     <h4>News </h4>
                                     <p>Aliquam sit amet aliquam magna. Vivamus ac sapien interdum, dapibus urna sed, pellentesque ante. Nulla ultrices finibus nisi,
                                         eget efficitur. <a href="news.php">Read more </a> </p>
                                 </article>
                                 <article class ="events-snippet">
                                    <h4>Events </h4>
                                    <p>Aliquam sit amet aliquam magna. Vivamus ac sapien interdum, dapibus urna sed, pellentesque ante. Nulla ultrices finibus nisi,
                                    eget efficitur. <a href="events.php">Read more </a> </p>
                                 </article>
                             </div>
                         </div>
                     </section>
                  </main>
             </div>
         </div>
         <div class ="footer-container">
              <?php include('includes/footer.php')?>
         </div>
     </body>
</html>

<!--Joseph Ketterer
Jkette01
Web Programming with PHP
Tobi Brodie -->
