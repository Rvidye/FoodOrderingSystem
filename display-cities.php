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
    <title>Dabbe Da Adda</title>
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
            <div class="result-show">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php
                $sdata=$_POST['searchdata'];
                ?>
                <p style="text-align: center;"><span class="primary-color"><strong>Result against "<?php echo $sdata;?>" keyword</strong></span></div>
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
                                 <form name="search" method="post" action="search-food.php">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Search Food</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                   </form>
									
									
									<div class="mySlides">
  <div class="numbertext"><br><h1 style="font-size:250%; text-align: center; color:red ; font-family: 'Times New Roman', Times, serif;"><br> EXPLORE <BR> AUTHENTIC <BR> FLAVOURES <BR> OF <BR>  'PUNE' !</h1></div>
  
</div>

<div class="mySlides">
  <div class="numbertext"><br><h1 style="font-size:250%; text-align: center; color:blue ; font-family: 'Times New Roman', Times, serif;"><br> EXPLORE <BR> AUTHENTIC <BR> FLAVOURES <BR> OF <BR>  'PUNE' !</h1></div>
 
  
</div>

<div class="mySlides">
  <div class="numbertext"><br><h1 style="font-size:250%; text-align: center; color:violet ; font-family: 'Times New Roman', Times, serif;"><br> EXPLORE <BR> AUTHENTIC <BR> FLAVOURES <BR> OF <BR>  'PUNE' !</h1></div>
  
 
</div>

	<script>
var slideIndex = 0;

showSlides();

 

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");

 for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    

  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); 
}
</script>

                                         
										
                                     </div>
                                     



                                    
                            </div>
                    
                            <!-- end:Pricing widget -->
                     
                            <!-- end:Widget -->
                        </div>
                        
                     <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                                        <?php
$searchdata=$_GET['searchdata'];
        $sql = "SELECT * FROM tblcities where Area like '%$searchdata%' ";
        $res_data = mysqli_query($con,$sql);
        $cnt=1;
        while($row = mysqli_fetch_array($res_data)){




?>
   
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                    <div class="food-item-wrap">
									
                                       <div class="figure-wrap bg-image"> <img src="admin/cities/<?php echo $row['Imgname'];?>" width="300" height="180">
                                           
                                            
                                        </div>
                                        <div class="content">
										

											<div class="product-name"><?php echo $row['Area'];?></div>
                                            <div class="product-name"><?php echo $row['City'];?></div>
											<div class="product-name"><?php echo $row['Pin-Code'];?></div>

											<?php if($_SESSION['fosuid']==""){?>
<a href="login.php" class="btn theme-btn-dash pull-right"><?php echo $row['Area'];?></a>
<?php } else {?>

    <form method="get"  name="search" action="admins.php"> 
    <button type="submit" name="searchdata" class="btn theme-btn btn-lg" value="<?php echo $row['Area'];?>">Search food</button>
   
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
