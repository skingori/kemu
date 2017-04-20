<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location:forbidden.php');//redirect to user page
        break;
		
      }
	  }else
	  {

header('Location:index.php');
}
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <title>Home | Consultant</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
		
            <div id="header">
                <h1><a href="#"><img src="images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a></h1>
            </div>    
			
            <div id="menu">
                <ul class="navigation">
                    <li><a href="#" class="selected menu_01">Home</a></li>
                    <li><a href="#log_out" class="menu_02">Logout</a></li>
                    <!--<li><a href="#caccount" class="menu_03">Create Account</a></li>-->
                   <!--<li><a href="#gallery" class="menu_04">Gallery</a></li>
                    <li><a href="#contactus" class="menu_05">Contact</a></li>-->
                </ul>
            </div>
		</div> <!-- end of sidebar -->  
  <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
                <div class="content_section">
                  <h2>Welcome &nbsp<?php echo $_SESSION['username'];?></h2> <i>Logged in as:&nbsp<?php echo $_SESSION['username'];?></i>
                  <!--<img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />
                  <p><em>Nullam at erat ipsum, quis tincidunt mauris. Nunc sit amet sapien eget eros iaculis hendrerit quis a enim. Vestibulum at leo ante, vel auctor velit.</em></p>
                  <p>Notebook is designed by <a rel="nofollow" href="http://www.tooplate.com">Free HTML Templates</a>. Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos, <a rel="nofollow" href="http://jwloh.deviantart.com/art/Aquaticus-Social-91014249">jwloh</a> for Aquaticus social icons, and <a rel="nofollow" href="http://www.icojoy.com">icojoy.com</a> for icons used in this template. Morbi rutrum euismod elit, nec adipiscing ante sodales sed. Cras accumsan congue turpis a luctus.</p>
                  -->
                  <img src="images/farm/mix.png" width="100%" height="">
                </div>


               <!--................Start of Admin thingys.......................-->
               <div class="content_section last_section">
               
                  <h3><b>ADVERTISE JOB</b></h3>


                 
                  	<?php 
	  include('incls/connector.php') ;

	  $query = "SELECT * FROM jobs" ;

		
		 $resource=mysql_query($query,$conn) or die ("An unexpected error occured ");

		  $result=mysql_fetch_array($resource);
					?>
	
<form id="form1" name="form1" method="post" action="">

        <table align="center" width="500" border="0">

		  <tr>
            <td><strong>Job ID:</strong></td>

            <td><input type="text" name="jobid" id="textfield3" value=""/></td>
			<td>&nbsp;</td>
			
          </tr>

          <tr>
            <td width="129"><strong>Job Type :</strong></td>

            <td width="152">

            <input type="text" name="jobtype" value="" />

            </td>
          </tr>

		  <tr>
            <td width="129"><strong>Job Status :</strong></td>
            <td width="152">

            <input name="jobstatus" type="text" id="textfield" value="" /></td>
          </tr>
          <tr>
            <td width="129"><strong>Job By :</strong></td>
            <td width="152">

            <input name="jobby" type="text" id="textfield" value="<?php echo $_SESSION['username'];?>" readonly /></td>
          </tr>

          
          </table>

        <p align="center">
          <label>
            <input type="submit" class="button" name="updater" id="button" value="Advertise" />
          </label>
        </p>

		<p>&nbsp </p>
		
	<p align="center"><img onClick="javascript: history.go(-1)" border="0" src="images/cooltext457951462.png" alt="Go Back" onmouseover="this.src='images/cooltext457951462MouseOver.png';" onmouseout="this.src='images/cooltext457951462.png';" /></p>

      </form>

      <?php

	 
         error_reporting(E_ALL ^ E_NOTICE);
	include("incls/connector.php");
	if (isset($_POST['updater'])){

	$jobid=$_POST['jobid'];

	$jobtype=$_POST['jobtype'];
	$jobstatus=$_POST['jobstatus'];
	$jobby=$_POST['jobby'];
	             
	 
	 	 
	//mysql_select_db("department",$link) or die ("Cannot select the database!");
$query=mysql_query("INSERT INTO jobs(`jobid`,`jobtype`,`jobstatus`,`jobby`)
VALUES('$jobid','$jobtype','$jobstatus','$jobby')
")or die(mysql_error());
		  
	 ?>

	 <script type="text/javascript">

	alert('Job has been posted');

	window.location="consultant.php";
	</script>


	<?php
	}
	?>



        </div>
</div>
               <!--...................End of admin thingys....................-->


<!--Start of deactivator-->

 



<!--End of deactivator-->


<!-- Start of deleter -->

<div class="panel" id="deleter">
                <div class="content_section">
                <h3> <b>DELETE ACCOUNT</b></h3>
                <hr>





	 			</div>

</div>

<!--End of Deleter -->



<!--Start of view messages-->

<div class="panel" id="viewmesgs">
                <div class="content_section">
                <h3> <b>VIEW COMMUNICATION</b></h3>
                <hr>


	</div>

</div>


<!--End of view messages-->


<!--Start of view cases-->

<div class="panel" id="viewcases">
                <div class="content_section">
                <h3> <b>SOLVED CASES</b></h3>
                <hr>



</div>

</div>

<!--End of view cases-->


<!--Start of logout -->

<div class="panel" id="log_out">
<div class="content_section">

<h3>Confirm You want to Log out<i><a href="log_out.php"> Log out? </i></a> Or go back to<i> <a href="consultant.php"> Your Profile? </i></a></h3>

</div>
</div>



<!-- End of logout -->


</body>
</html>

