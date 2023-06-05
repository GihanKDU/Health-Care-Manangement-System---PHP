<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <?php include 'navbar.php'; ?>
    
   


      <!-- MAKE AN APPOINTMENT -->
      <section id="appointment" data-stellar-background-ratio="3">
          <div class="container doc__container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/team-11.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Register </h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">First Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Last Name">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">NIC</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="NIC">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder=" Email">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" id="email" name="email" placeholder="Password">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Re Enter password</label>
                                        <input type="password" class="form-control" id="email" name="email" placeholder="Re Enter password">
                                   </div>

                                   

                                   

                                   <div class="col-md-12 col-sm-12">
                                        
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Register</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>

         


     <!-- FOOTER -->
     <?php include 'footer.php'; ?>
     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>