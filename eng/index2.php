<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location:client.php');//redirect to client page 
        break;
		case 2:
		  header('location:consultant.php');//redirect to  page
        break;
		case 3:
		  header('location:admin.php');//redirect to admin
        break;
		
      }
	  }

	  //else
	  //{

//header('Location: .php');
//}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Notebook by tarclink</title>
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
                    <li><a href="#home" class="selected menu_01">Home</a></li>
                    <li><a href="#login" class="menu_02">Login</a></li>
                    <li><a href="#caccount" class="menu_03">Create Account</a></li>
                    <li><a href="#" class="menu_04">Market list</a></li>
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
                  <h2>Welcome to the farmers choise</h2>
                  <img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />
                  <ol type="1">
                  <p><em>Come join us at the market on SATURDAY 14th MAY, 8.30 til 4.00pm, back at the Showground on KICC.We have a SPECIAL market this month.</em></p>
                  <li><p>Enjoy the Cadia Mine displayCheck out the HIUGE machinery</p></li>
                  <li><a rel="nofollow" href="">Go 'underground' in the virtual underground mine</a></li>
				<li>60 + stallholders trading until 4pm ,</li>
                 <li><a rel="nofollow" href="">Grab breakfast  </a> </li>
                 <li>Stay for lunch<a rel="nofollow" href="">..</a> .. <a rel="nofollow" href="">....</a> ..</p></li>
                  </ol>
                </div>
                <div class="content_section last_section">
                  <h2>Farmers Data Simplified.</h2>
                  <ul class="service_list">
                    <li><a href="#" class="service_one">Analyze your soils,seeds,fertilizers,economics, and weather.</a></li>
                    <li><a href="#" class="service_two">Make web based agri business information system reality</a></li>
                    <li><a href="#" class="service_three">Link all farmers through online system </a></li>
                    <li><a href="#" class="service_four">Access agriculture’s largest database of real world seed performance.</a></li>
                    <li><a href="#" class="service_five">Join thousands of advanced farmers in the digital coffee shop</a></li>
                  </ul>
                </div>
              </div> 
              <!-- end of home -->



<!--Start of admin account-->



<!--End of admin account-->





 <!-- Start of caccount-->
			  
              <div class="panel" id="caccount">
                <div class="content_section">
                  <h1>Create New Account</h1>

<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conn, $conn);
$query_Recordset1 = "SELECT * FROM users";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <title>:: Create Account ::</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->

<link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="incls/jquery.js"></script>
    <script src="incls/script.js"></script>
    <script src="incls/script.responsive.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 1){$("#user-result").html('');return;}
		
		if(username.length >= 1){
			$("#user-result").html('<img src="images/loader.gif" />');
			$.post('check-uname.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>	


</head>
<body>
<div id="main">
<div class="sheet clearfix">
            <div class="layout-wrapper clearfix">
                <div class="content-layout">
                    <div class="content-layout-row">
                    <div class="layout-cell sidebar1 clearfix">
					<div class="vmenublock clearfix">
                      <div class="vmenublockcontent">
                   
                
                      </div>
                    </div>
				   </div>
                <div align="center">
              <table width="100%" border="0" cellpadding="1" cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" bgcolor="#8FC4F7"> 
                         <div align="center"><b><font color="#FFFFFF">Create Account</font></b></div>
                        </td>
                  </tr>
               </table>	 
      <form class="cmxform" id="signupForm" method="POST" action="">
	
		<legend><b>Provide All required details</b></legend>
		<table width="356" align="center">
		<tr>
		   <td width="75">
			<label for="firstname">Firstname:</label>
		   </td>
			<td width="232">
			<input id="firstname" name="firstname" type="text" required minlength="5" autocomplete="off"  />
		   </td>
		   <td width="64">&nbsp  &nbsp </td>
		</tr>
		<tr>
		    <td>
			<label for="lastname">Lastname:</label>
			</td>
			<td>
			<input id="lastname" name="lastname" type="text" autocomplete="off" required/>
			</td>
			<td> &nbsp &nbsp </td>
		</tr>
		<tr>
		   <td>
			  <label for="username">Username:</label>
			</td>
			<td>
			  <input id="username" name="username" type="text" autocomplete="off" required /> 
			</td>
			<td> &nbsp &nbsp <span id="user-result"></span></td>
		</tr>
		
		<tr>
		  <td height="24">
		    <label for="username">Usertype:</label></td>
		  <td>
		    <select name="category" id="usertype" required >
		      <option value="1">Client</option>
		      <option value="2">farmer</option>
		      </select>
		    </td>
		  <td> &nbsp &nbsp </td>
		  </tr>
		<tr>
		  <td>
		    <label for="emil">Email:</label></td>
		  <td>
		    <input id="email" name="email" type="email" required/>
		    </td>
		  <td> &nbsp &nbsp </td>
		  </tr>
		<tr>
		   <td>
			  <label for="password">Password:</label>
		   </td>
		    <td>
			   <input id="password" name="password" type="password" required/>
		   </td>
		   <td> &nbsp &nbsp </td>
		</tr>
		<tr> 
		   <td>
			<label for="confirm_password">Verify:</label>
		   </td>
		   <td>
			   <input id="confirm_password" name="confirm_password" equalTo="#password" type="password" required/>
			 <!--<p>&nbsp; </p>-->
		   </td>
		   <td> &nbsp &nbsp  </td>
		</tr>
		<tr> 
		   <td colspan="3"> <hr>
		   </td>
		</tr>
		<tr>
		   <td colspan="3">
			<label for="agree">Please agree to our policy</label>
			<input type="checkbox" class="checkbox" id="agree" name="agree" required />
		 </td>
		</tr>
		<tr>
		    <td > 
			<label for="agree"> &nbsp &nbsp </label>
		   </td>
		   <td > 
			<input class="button" type="submit" value="Create Account" name="create"/>
		   </td>
		   <td> &nbsp &nbsp </td>
		</tr>
	 </table>
	</form>
	
	<?php include "incls/connector.php"; ?>
	<?php
if (isset($_POST['create'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$category=$_POST['category'];
$email=$_POST['email'];
$password=$_POST['confirm_password'];
$encrypted = md5($password); // Encrypting pssword using md5 algo
$query=mysql_query("INSERT INTO users(`category`,`username`,`password`,`firstname`,`lastname`,`email`,`status`,`speciality`)
VALUES('$category','$username','$encrypted','$firstname','$lastname','$email','inactive','N/A')
")or die(mysql_error());
?>
<script type="text/javascript">
	alert('You are Now Registered.Please login now to Proceed ');
	window.location="index.php";
	</script>

	<?php
	}
	?>	
         </div>
                    </div>
                </div>
            </div>
    </div>

</div>


</body></html>
<?php
mysql_free_result($Recordset1);
?>

                  
                </div>
				
                <div class="content_section last_section">
                  <h2></h2>
                  <blockquote>
                    <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus, at placerat turpis. Mauris feugiat suscipit tempus fringilla, felis in velit. Aliquam a leo nec massa pharetra pulvinar.</p>
                    <cite>Thomas - <span>Designer</span></cite> </blockquote>
                </div>
              	</div>

<!-- end of caccount-->

<!--Start of new beginning fucker-->

		
          <div class="panel" id="login">
                <h1>Member Login</h1>

<div align="center">
              <table width="100%" border="0" cellpadding="1" cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" bgcolor="#8FC4F7"> 
                         <div align="center"><b><font color="#FFFFFF">Login</font></b></div>
                        </td>
                  </tr>
               </table>	 
      <form  id="signin" method="POST" action="validator.php">	
		<table align="center">  
		
		<tr>
		   <td>
			  <label for="username">Login As </label>
			</td>
			<td>
			  <select name="category" id="usertype" required >
				<option value="1" id="sysuser" >Client</option>
				<option value="2" id="sysuser" >farmer</option>
				<option value="3" id="admin" >Admin</option>
            </select>
			</td>
		</tr>
		<tr>
		   <td>
			  <label for="username">Username</label>
			</td>
			<td>
			  <input id="username" name="username" type="text" autocomplete="off" required " />
			</td>
		</tr>
		<tr>
		   <td>
			  <label for="password">Password</label>
		   </td>
		    <td>
			   <input id="password" name="password" type="password" required/>
		   </td>
		
		<tr>
		   <td colspan="2">
			<label for="agree">keep me signed in</label>
			<input type="checkbox" class="checkbox" id="signed" name="signed" />
		 </td>
		</tr>
		<tr>
		    <td > 
			<label for="agree"> &nbsp </label>
		   </td>
		   <td > 
			<input class="button" type="submit" value="login" name="login"/>
		   </td>
		</tr>
		<tr>
		  <td >&nbsp;</td>
		  <td ><a href="#">Forgot password</a></td>

		  <tr>

		  <hr>
                  <h2></h2>
                  <blockquote>
                    <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula, quis viverra tellus nulla a odio. Curabitur vitae enim risus, at placerat turpis. Mauris feugiat suscipit tempus fringilla, felis in velit. Aliquam a leo nec massa pharetra pulvinar.</p>
                    <cite>Thomas - <span>Designer</span></cite> </blockquote>
                    <p>
<hr>
                </div>
          </tr>
          
		  </tr>
	    </table>
      </form>

<hr>
      <?php include("incls/footer.php") ?>
         </div>
                    </div>
                </div>
            </div>
    </div>


                

              </div>

</body>
</html>
