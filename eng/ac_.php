<?php
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location:forbidden.php');//redirect to client page 
        break;
		case 2:
		  header('location:consultant.php');//redirect to  page
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

<!-- Start od deleting process-->
                <h3> <b>CONFIRM ACTIVATION</b></h3>
                <hr>

<?php
       	 include("incls/connector.php");		
	     $id=$_REQUEST['userid']; 
	 	 $query="SELECT * FROM users WHERE userid='".$id."'";
		
		 $resource=mysql_query($query,$conn) or die ("An unexpected error occured while <b>Activating</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  
	 ?>
	    <form id="form1" name="form1" method="post" action="">
        <table align="center" width="400" border="0">
          <tr>
            <td width="129"><strong>Account id:</strong></td>
            <td width="152">
            <input type="hidden" name="uid" value="<?php echo $result[0] ?>"  />
			<input type="hidden" name="uname" value="<?php echo $result[2] ?>"  />
            <label>
              <input name="id" type="text" id="textfield" value="<?php echo $result[0] ?>" readonly />
            </label></td>
          </tr>
		  <tr>
		     <td width="129"><strong>username:</strong></td>
			 <td> <input name="uname" type="text" id="textfield" value="<?php echo $result[2] ?>" readonly /></td>
		  </tr>
		 </table>
		 <p align="center">
          <label>
            <input type="submit" name="de" class="button" value="Activate" />
          </label>
        </p>
		 </form>
<?php
   if (isset($_POST['de'])){ 
   include("incls/connector.php");
	 $id=$_POST['id'];
	 $query="UPDATE users SET status='active' WHERE userid='".$id."'";
		
		  if(!mysql_query($query,$conn))
		  {die ("An unexpected error occured while activating Please try again!");}
		  
	 ?>

<script type="text/javascript">
	alert('The Account has been activated');
	window.location="admin.php";
	</script>

	<?php
	}
	?>	

</div>



<h3>Confirm You want to activate<i><a href="#"> ativate? </i></a> Or go back to<i> <a href="admin.php"> Admin pannel? </i></a></h3>
</div>



<!--End of deleting process-->



<!--Start of logout -->

<div class="panel" id="log_out">
<div class="content_section">
<h3>Confirm You want to Log out<i><a href="log_out.php"> Log out? </i></a> Or go back to<i> <a href="admin.php"> Admin pannel? </i></a></h3>

</div>
</div>


<!-- End of logout -->


</body>
</html>

