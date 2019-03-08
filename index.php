
<?php
ob_start();
require_once("includes/bootstrap.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASEURL; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASEURL; ?>css/style.css" rel="stylesheet">

  </head>

  <body>
 <?php 
      Helper::sectionYield("navigation");
      ?>
    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <?php
        
          include_once ("includes/layouts/blogs.php");
          include_once ("includes/layouts/sidebar.php");
//          Helper::sectionYield("sidebar");
          ?>

          

          <!-- Pagination -->
<!--
          <?php 
      Helper::sectionYield("pagination");
      ?>
-->
          

        </div>

        <!-- Sidebar Widgets Column -->
        

      </div>
      <!-- /.row -->

  
    <!-- /.container -->

    <!-- Footer -->
    <?php
      Helper::sectionYield("footer");
      ?>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
