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
    
    <!-- =================Contacte Area Starts================= -->

        <?php include 'contact.php'?>
    
    <!-- =================Contact Area Ends================= -->
    <!-- =================Product Area Starts================= -->

    
    <!-- =================Product Area Ends================= -->
    <!-- =================man-collection Area Starts================= -->
    

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