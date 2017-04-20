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
    <!-- awesome icons available-->

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- end of icons -->


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
                  <!--
                  <img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />
                  <p><em>Nullam at erat ipsum, quis tincidunt mauris. Nunc sit amet sapien eget eros iaculis hendrerit quis a enim. Vestibulum at leo ante, vel auctor velit.</em></p>
                  <p>Notebook is designed by <a rel="nofollow" href="http://www.tooplate.com">Free HTML Templates</a>. Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos, <a rel="nofollow" href="http://jwloh.deviantart.com/art/Aquaticus-Social-91014249">jwloh</a> for Aquaticus social icons, and <a rel="nofollow" href="http://www.icojoy.com">icojoy.com</a> for icons used in this template. Morbi rutrum euismod elit, nec adipiscing ante sodales sed. Cras accumsan congue turpis a luctus.</p>
                  -->
                  <img src="images/farm/mix.png" width="100%" height="">
                </div>


               <!--................Start of Admin thingys.......................-->
<div class="content_section last_section">
               
               <h3><b>ACCOUNT OPTIONS</b></h3>


    <!-- Start of life -->

    <table class="users" cellspacing="15" cellpadding="" bgcolor="black" align="center">
        <thead>
        <tr>
            <th class="row-1 row-ID">Preferences</th>
            <th class="row-2 row-name">Services</th>
            <th class="row-3 row-job">Farming</th>
            <th class="row-4 row-email">Market<th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#profile"><i class="fa fa-cogs"></i> Profile </a></td>
            <td><a href="#viewcases"><i class="fa fa-question-circle"></i> Make a Query</a></td>
            <td><a href="#viewcases"><i class="fa fa-life-ring"></i> Disease </td>
            <td><a href="#viewcases"><i class="fa fa-money"></i> Pricing </td>
        </tr>
        <tr>
            <td></td>
            <td><a href="#received"><i class="fa fa-envelope"></i> Inbox </a></td>
            <td><a href="#viewcases"><i class="fa fa-briefcase"></i> Jobs </td>
            <td></td>
        </tr>
        </tbody>
    </table>


   <!--End of life -->




               </ul>
                
</div>
</div>

               <!--...................End of admin thingys....................-->


<!--Start of profile -->

  <div class="panel" id="profile">
                <div class="content_section">
                <h3> <b>My Profile</b></h3>
                <hr>

<?php 
	  include('incls/connector.php') ;

	  $query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'" ;

		
		 $resource=mysql_query($query,$conn) or die ("An unexpected error occured ");

		  $result=mysql_fetch_array($resource);
					?>
	
<form id="form1" name="form1" method="post" action="">

        <table align="center" width="500" border="0">

		  <tr>
            <td><strong>Username:</strong></td>

            <td><input type="text" name="uname" id="textfield3" value="<?php echo $result[2]?> " readonly /></td>
			<td>&nbsp;</td>
			
          </tr>

          <tr>
            <td width="129"><strong>First Name :</strong></td>

            <td width="152">

            <input type="hidden" name="userid" value="<?php echo $result[0] ?>" />

            <input name="fname" type="text" id="textfield" value="<?php echo $result[4] ?>" />
            </td>
          </tr>

		  <tr>
            <td width="129"><strong>Last Name :</strong></td>
            <td width="152">

            <input name="lname" type="text" id="textfield" value="<?php echo $result[5] ?>" /></td>
          </tr>

          <tr>

            <td><strong>Category:</strong></td>
            <td><strong>Consultant</strong></td>
          </tr>

		  <tr>
            <td><strong>Speciality:</strong></td>

            <td><input type="text" name="speciality" id="textfield3" value="<?php echo $result[7] ?>" required /></td>

          </tr>
 	  <tr>
            <td><strong>Email:</strong></td>

            <td><input type="text" name="email" id="textfield4" value="<?php echo $result[8] ?>" required /></td>

          </tr>
		<tr>
			<td><strong>Company Name</strong></td>
			<td><input name="cname" type="text" id="textfield" value="<?php echo $result[9] ?>"</td>
		</tr>
		<tr>
			<td><strong>Other details<strong></td>
			<td><input name="odetails" type="text" id="textfield" value="<?php echo $result[10] ?>"></td>
		</tr>
		<tr>
			<td><strong>Company Speciality</strong></td>
			<td><input name="cspeciality" type="text" id="textfield" value="<?php echo $result[11] ?>"></td>
		</tr>
          </table>

        <p align="center">
          <label>
            <input type="submit" class="button" name="updater" id="button" value="Update" />
          </label>
        </p>

		<p>&nbsp </p>
		
	<p align="center"><img onClick="javascript: history.go(-1)" border="0" src="images/cooltext457951462.png" alt="Go Back" onmouseover="this.src='images/cooltext457951462MouseOver.png';" onmouseout="this.src='images/cooltext457951462.png';" /></p>

      </form>

      <?php

	 
         error_reporting(E_ALL ^ E_NOTICE);
	include("incls/connector.php");
	if (isset($_POST['updater'])){

	 $id=$_POST['userid'];

         $fname=$_POST['fname']; 

	$lname=$_POST['lname'];
	$email=$_POST['email'];

        $speciality=$_POST['speciality'];
	$cname=$_POST['cname'];

    $odetails=$_POST['odetails'];
	$cspeciality=$_POST['cspeciality'];
		
	             
	 
	 	 
	//mysql_select_db("department",$link) or die ("Cannot select the database!");
	 
	$query="UPDATE users SET firstname='".$fname."', lastname='".$lname."', speciality='".$speciality."',email='".$email."',cname='".$cname."',odetails='".$odetails."',cspeciality='".$cspeciality."' WHERE userid='".$id."'";
	  if(!mysql_query($query,$conn))
{
	die ("An unexpected error occured while Updating , Please try again!");
	}
		  
	 ?>

	 <script type="text/javascript">

	alert('Your profile  has been Updated');

	window.location="consultant.php";
	</script>


	<?php
	}
	?>

</div>
</div>


<!-- End of profile-->

<!--Start of received messages-->


  <div class="panel" id="received">
                <div class="content_section">
                <h3> <b>Received Messages</b></h3>
                <hr>
<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username']) && !isset($_SESSION['category'])) {
      

header('Location:index.php');
}
?>

 <?php 
	 	 include("incls/connector.php");	
	 $query="SELECT * FROM message WHERE recipient ='{$_SESSION['username']}' and status='UNREAD'";
		
		  $resource=mysql_query($query,$conn);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>message</b></td> <td><b>sender.</b></td></td><td><b>Time & Date</b></td><td><b>Action</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[3]."</td><td>".$result[1]."</td><td>".$result[4]."</td><td>
	<a href=\"reader.php?mesid=".$result[0]."\"><img border=\"0\" src=\"images/read.png\"/></a>
	</td></tr>";
	} echo "</table>";
	 ?>

  </div>
  </div>


<!-- End of received messages>

<!--Start of logout -->

<div class="panel" id="log_out">
<div class="content_section">

<h3>Confirm You want to Log out<i><a href="log_out.php"> Log out? </i></a> Or go back to<i> <a href="consultant.php"> Control panel? </i></a></h3>

</div>
</div>


<!-- End of logout -->


</body>
</html>

