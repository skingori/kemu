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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "comment")) {
  $insertSQL = sprintf("INSERT INTO comments (email, name, `comment`) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['comment'], "text"));

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());

  $insertGoTo = "success.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

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
	  }//else
	  //{

//header('Location: .php');
//}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <title>:: Login ::</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
    <script src="incls/jquery.js"></script>
    <script src="incls/script.js"></script>
    <script src="incls/script.responsive.js"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>
<body>
<div id="main">
<?php include('incls/header.php') ?>
<div class="sheet clearfix">
            <div class="layout-wrapper clearfix">
                <div class="content-layout">
                    <div class="content-layout-row">
                    <div class="layout-cell sidebar1 clearfix">
					<div class="vmenublock clearfix">
                      <div class="vmenublockcontent">
                       <ul class="vmenu"><li><a href="index.php" class="active">Login</a></li>
<li><a href="c_account.php">Create Account</a></li></ul>
                
                      </div>
                    </div>
				   </div>
                <div align="center">
              <table width="100%" border="0" cellpadding="1" cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" bgcolor="#8FC4F7"> 
                         <div align="center"><b><font color="#FFFFFF">Login</font></b></div>
                        </td>
                  </tr>
               </table>	 
      <form name="comment"  id="comment" method="POST" action="<?php echo $editFormAction; ?>">	
		<table align="center">  
		
		<tr>
		   <td>
			  <label for="name">Email: </label>
			</td>
			<td><span id="sprytextfield1">
            <input id="email" name="email" type="text" autocomplete="off" required " />
            <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
		</tr>
		<tr>
		   <td>
			  <label for="name">Name:</label>
			</td>
			<td><span id="sprytextfield2">
			  <input id="name" name="name" type="text" autocomplete="off" required " />
			  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
		</tr>
		<tr>
		   <td>
			  <label for="password">Comment:</label>
		   </td>
		    <td><span id="sprytextarea1">
		      <textarea name="comment" id="comment" cols="45" rows="5"></textarea>
		      <span class="textareaRequiredMsg">A value is required.</span></span></td>
		
		<tr>
		   <td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		    <td > 
			<label for="agree"> &nbsp </label>
		   </td>
		   <td ><input name="submit" type="submit" class="button" id="submit" value="Comment"></td>
		</tr>
	 </table>
		<input type="hidden" name="MM_insert" value="comment">
      </form>
         </div>
                    </div>
                </div>
            </div>
    </div>
	<?php include("incls/footer.php") ?>

</div>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body></html>