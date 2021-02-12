<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Food Ordering System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>


	
<body>

    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include_once('includes/header.php');?>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
              
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/decouvrez-l-experience-food-d-airbnb.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>,
            
			
			
<!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
				
                    <div class="row">
					
			
                        
                     <div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                                        <?php
$searchdata=$_GET['searchdata'];
        $sql = "SELECT * FROM tbladmin where City like '%$searchdata%' ";
        $res_data = mysqli_query($con,$sql);
        $cnt=1;
        while($row = mysqli_fetch_array($res_data)){




?>
   
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="food-item-wrap">
									
                                       <div class="figure-wrap bg-image"> <img src="admin/resimages/<?php echo $row['Image'];?>" width="380" height="210">
                                           
                                            
                                        </div>
                                        <div class="content">
										

											<div class="product-name"><?php echo $row['Name11'];?></div>
                                            <div class="product-name"><?php echo $row['City'];?></div>
											<div class="product-name"><?php echo $row['Address'];?></div>

											<?php if($_SESSION['fosuid']==""){?>
<a href="login.php" class="btn theme-btn-dash pull-right">Order Now</a>
<?php } else {?>
   <form method="post"  name="search" action="res-food.php"> 
    <button type="submit" name="searchfood" class="btn theme-btn btn-lg" value="<?php echo $row['UserName'];?>">Search food</button>
   
  </form>
  
<?php }?>
             </div>
                                        </div>
                                  
                                    </div>
                               
								
                                    <?php }?>
                              
                                <!-- Each popular food item starts -->
                           
                            </div>
                            <!-- end:right row -->
                        </div>
                    </div>
                </div>
				
            </section>
            
            <!-- start: FOOTER -->
            <?php include_once('includes/footer.php');?>
            <!-- end:Footer -->
        </div>
    </div>
    <!-- end:page wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
</html>
