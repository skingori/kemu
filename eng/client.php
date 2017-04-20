<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 2:
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
    <title>Home | Client</title>
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
               
                  <h3><b>USER PROFILE</b></h3>


                 <ul>

               <h3><img src=images/onebit_21.png>  Settings</h3>

               <font color="green"><b><li><a href="#consult">Available Consultants</a></li></b></font>
               <!--<font color="green"><b><li><a href="#deactivate">Submit Query</a></li></b></font>-->
               <font color="green"><b><li><a href="#reader">Unread Messages</a></li></b></font>
               <br>

               <h3><img src=images/postediticon.png> Options</h3>
          
               <font color="green"><b><li><a href="#jobs">View Jobs</a></li></b></font>
              




                  </ul>
                

              </div>
              </div>

               <!--...................End of admin thingys....................-->


<!--Start of consult -->

<div class="panel" id="consult">
                <div class="content_section">
                <h3> <b>CONNECT TO FARMER/CONSULTANT</b></h3>
                <hr>


<div align="center">
       
             <?php 
	 	 include("incls/connector.php");	
	 $query="SELECT * FROM users WHERE category ='2' and status='active' and speciality<>'N/A'";
		
		  $resource=mysql_query($query,$conn);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Names</b></td> <td><b>Speciality.</b></td></td><td><b>Action</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[4]."&nbsp".$result[5]."</td><td>".$result[7]."</td><td>
	<a href=\"messenger.php?userid=".$result[0]."\"><img border=\"0\" src=\"images/connect.png\"/></a>
	</td></tr>";
	} echo "</table>";
	 ?>
	
	 			</div>
</div>
</div>


<!--End of consult -->



<!--Start of reader-->

 <div class="panel" id="reader">
                <div class="content_section">
                <h3> <b>UNREAD MESSAGES</b></h3>
                <hr>


<?php 
	 	 include("incls/connector.php");	
	 $query="SELECT * FROM message WHERE recipient ='{$_SESSION['username']}' and status='UNREAD'";
		
		  $resource=mysql_query($query,$conn);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Message</b></td> <td><b>Sender.</b></td></td><td><b>Time & Date</b></td><td><b>Action</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[3]."</td><td>".$result[1]."</td><td>".$result[4]."</td><td>
	<a href=\"client_reader.php?mesid=".$result[0]."\"><img border=\"0\" src=\"images/read.png\"/></a>
	</td></tr>";
	} echo "</table>";
	 ?>


	 			</div>

</div>



<!--End of reader-->


<!-- Start of deleter -->

<div class="panel" id="jobs">
                <div class="content_section">
                <h3> <b>APPLY FOR JOBS</b></h3>
                <hr>
    <!--- !-->

  <table align='center' border='0' bgcolor='#9EDF00' width="100%">
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php
$host="localhost";
$username="root";
$password="root";
$db_name="farmer";
$tbl_name="jobs";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("SELECT * from $tbl_name");
echo"<table align='center'  bgcolor='' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor=''>
<caption><h3>AVAILABLE JOBS</h3></caption>
<tr bgcolor=''>
<th width='3%'>JOB ID</th>
<th width='10%'>JOB TYPE</th>
<th width='10%'>JOB STATUS</th>
<th width='15%'>POST BY</th>
</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['jobid']."</td>";
echo  "<td width='7%'>".$row ['jobtype']."</td>";
echo  "<td width='10%'>".$row ['jobstatus']."</td>";
echo  "<td width='10%'>".$row ['jobby']. "</td>";


echo "</tr>";
}
echo"</table>";

?>

<br/>
      </td>
          </tr>
          <tr>
      <td align="center"><a href="#" target="_parent">Apply now! <b>|</b></a>
      <a href="client.php" target="_parent">Log out</a></td>

          </tr>
         
  </table>

    <!--  !-->


	 			</div>

</div>

<!--End of Deleter -->



<!--Start of jobs-->




<!--End of jobs-->


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

<h3>Confirm You want to Log out<i><a href="log_out.php"> Log out? </i></a> Or go back to<i> <a href="client.php"> Your Profile? </i></a></h3>

</div>
</div>


<!-- End of logout -->


</body>
</html>

