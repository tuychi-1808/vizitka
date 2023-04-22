<?php     header("Content-Type: text/html; charset=utf-8");
require ('development_mode_control.php') ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'header.php'?>

</head>

<body>
    <!-- =============Preloader Starts=============-->
    <div class="loader">
        <div class="loding-cricle"></div>
    </div>
    <!-- =============Preloader Ends=============-->


    <!-- =================Autopopup Area Starts================= -->

    
    <!-- =================Autopopup Area Ends================= -->
           

    <!-- =================Header Area Starts================= -->

    <?php include 'navmenu.php'?>

    <!-- =================Header Area Ends================= -->

    <!-- =================Slider Area Starts================= -->

   <?php include 'side_aria.php'?>

    <!-- =================Slider Area Ends================= -->
    <!-- =================Product-sample Area Starts================= -->

     <?php include 'simple_area.php'?>
    <!-- =================Product-sample Area Ends================= -->
    
    <!-- =================Subscribe Area Starts================= -->


    
    <!-- =================Subscribe Area Ends================= -->
    <!-- =================Product Area Starts================= -->

      <?php include 'all_products.php'?>
    
    <!-- =================Product Area Ends================= -->
    <!-- =================man-collection Area Starts================= -->
    
   <?php include 'collection_area.php'?>
    <!-- =================man-collection Area Ends================= -->
    
    <!-- =================Instagram Area Starts================= -->


    <!-- =================Instagram Area Ends================= -->
    <!-- =================Footer Area Starts================= -->

    <?php include 'footer.php'?>
    
    <!-- =================Footer Area Ends================= -->
    
     <!-- scripts -->
  <?php include 'scripts.php'?>
</body>

</html>