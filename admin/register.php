<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $name11=$_POST['name11'];
    $uname=$_POST['uname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $city=$_POST['city'];
	$password=md5($_POST['password']);
	$address=$_POST['address'];

	
	$itempic=$_FILES["resimages"]["name"];
    $extension = substr($itempic,strlen($itempic)-4,strlen($itempic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
	
	
    $ret=mysqli_query($con, "select Email from tbladmin where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
	
	$ret1=mysqli_query($con, "select Email from tbladmin where UserName='$uname'");
	$result1=mysqli_fetch_array($ret1);
	
	
	
    if($result>0){
$msg="This email or Contact Number already associated with another account $extension";
    }
	elseif($result1>0)
	{
		$msg="This name is already associated with another account";
	}
    else{
	
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}	
else
{		
    $itempic=md5($itempic).$extension;
     move_uploaded_file($_FILES["resimages"]["tmp_name"],"resimages/".$itempic);
	
	$query=mysqli_query($con, "insert into tbladmin (Name11, UserName, MobileNumber, Email, Password, City, Address, Image) value('$name11', '$uname','$contno', '$email', '$password', '$city', '$address', '$itempic')");
    
	if ($query) {
    $msg="You have successfully registered";
}
  
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

}
	}
}

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
    <link href="css/bootstrap1.min.css" rel="stylesheet">
    <link href="css/font-awesome1.min.css" rel="stylesheet">
    <link href="css/animsition1.min.css" rel="stylesheet">
    <link href="css/animate1.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style1.css" rel="stylesheet"> </head>
<body>
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include('includes/header1.php');?>
            <!-- /.navbar -->
<script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>

         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     <li><a href="#">Signup Page</a></li>
                     <li>Signup</li>
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                              <form action="" name="signup" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Name for you Business:</label>
                                       <input class="form-control" type="text" value="" id="name11" name="name11" required="true" placeholder="Enter name of your restaurant/mess/service."> 
                                    </div>
									<div class="form-group col-sm-6
									"><label for="exampleInputEmail1">Image for you Business:</label>
                                                <input class="form-control" type="file" name="resimages" required="true">
                                            </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">User Name</label>
                                       <input class="form-control" type="text" value="" id="uname" name="uname" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Email address</label>
                                       <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required="true"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Mobile Number</label>
                                       <input class="form-control" type="text" value="" id="mobilenumber" name="mobilenumber" required="true" maxlength="10" pattern="[0-9]{10}"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" class="form-control" id="password" value="" name="password" required="true" required="true"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Repeat password</label>
                                       <input type="password" class="form-control" id="repeatpassword" value="" name="repeatpassword" required="true"> 
                                    </div>
									<div class="form-group col-sm-12">
                                       <label for="exampleInputPassword1">Area in Pune</label>
                                       <select name="city" required="true">
									    <option><b>Katraj</b></option>
										<option><b>Kothrud</b></option>
										<option><b>Pune Cantonment</option>
										
									   </select>
                                    </div>
									<div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Detailed Address</label>
                                       <textarea rows="5" cols="50" placeholder="Enter Address in the format:&#13;&#10; Street Name, Nearby Landmark and Area Name." name="address" required="true"></textarea>
                                    </div>
                                                                     </div>
                                 
                                 <div class="row">
                                    <div class="col-sm-4">
                                      <button type="submit" name="submit" class="btn theme-btn"><i class="ft-user"></i> Register</button>
                                    </div>
                                    <div class="col-sm-4">
                          <a href="index.php" class="btn theme-btn"><i class="ft-user"></i> Login</a>

                        </div>
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>Registration is fast, easy, and free.</h4>

                        <hr>
                        <img src="images/food.jpg" alt="" class="img-fluid">
                        <p></p>
             
             
                        <!-- end:Panel -->
                        <h4 class="m-t-20">Contact Customer Support</h4>
                        <p> If you"re looking for more help or have a question to ask, please </p>
                        <p> <a href="contact.php" class="btn theme-btn m-t-15">contact us</a> </p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
           
            <!-- start: FOOTER -->
           <?php include('includes/footer.php');?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/tether.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/animsition.min.js"></script>
    <script src="js/js/bootstrap-slider.min.js"></script>
    <script src="js/js/jquery.isotope.min.js"></script>
    <script src="js/js/headroom.js"></script>
    <script src="js/js/foodpicky.min.js"></script>
</body>

</html>