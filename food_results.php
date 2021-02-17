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
            <div class="inner-page-hero bg-image" data-image-src="images/online1.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p><span class="primary-color"><strong>Find Your Delicious Foods Here..</strong></span> </div>
            </p>
           
        </div>
    </div>
</div>
<!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                 



                                    <div class="main-block" style="margin-top: 10%">
                                    <div class="sidebar-title white-txt">
                                        <h6>Food Categories</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                               <?php
      
      $query=mysqli_query($con,"select * from  tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              
                  
                          
                                        <ul>
                                            
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <span class="custom-control-description"><a href="#.php?catid=<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></a></span> </label>
                                            </li>
                                    
                                        
                                        </ul>
                              <?php } ?>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                    
                            <!-- end:Pricing widget -->
                     
                            <!-- end:Widget -->
                        </div>
                      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                                        <?php

        $sql = "SELECT * FROM tblfood ";
        $res_data = mysqli_query($con,$sql);
        $cnt=1;
        while($row = mysqli_fetch_array($res_data)){




?>
   
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 food-item">
                                    <div class="food-item-wrap">
                                        <div class="figure-wrap bg-image"> <img src="admin/itemimages/<?php echo $row['Image'];?>" width="365" height="210">
                                       
                                           
                                            
                                        </div>
                                        <div class="content">
                                            <div><h5><?php echo $row['ItemName'];?></h5></div>
                                            <div class="product-name"><?php echo substr($row['ItemDes'],0,50);?></div>
                                            <div class="price-btn-block"> <span class="price">Rs. <?php echo $row['ItemPrice'];?></span> 
											
											<form method="get" action="food-detail.php">
											<div>
											<button type="submit" style="color:red;background-color:black" name="searchit" value="<?php echo $row['Admin'];?>">Food Details</button>
											</div>
											</form>
											
											<?php if($_SESSION['fosuid']==""){?>

											
											<a href="login.php" class="btn theme-btn-dash pull-right">Order Now</a>
<?php } else {?>
    <form method="post" > 
    <input type="hidden" name="searchfood" value="<?php  echo $row['Admin']; ?>">   
	<input type="hidden" name="foodid" value="<?php echo $row['ID'];?>">  
<button type="submit" name="submit" class="btn theme-btn-dash pull-right">Order Now</button>
  </form> 
<?php }?>
             </div>
                                        </div>
                                  
                                    </div>
                                </div>
                                    <?php } ?>
                              
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
