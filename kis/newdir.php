<?php
/*=========================================================================================
 File Sharing System
 PHP File Sharing System
 author: Diego A. Guevara C. - DiG
 -------------------------------------------------------
 CVS INFO:
 $Date: 2007/03/10 19:12:29 $
 $Revision: 1.1 $
 $Log: newdir.php,v $
 Revision 1.1  2007/03/10 19:12:29  DiG
 Diego Guevara
 Add Folder Creation
 Add Confirmation for Delete Folder and Files

 -------------------------------------------------------
 LICENSE:
 GNU GPL
 http://www.gnu.org/copyleft/gpl.html
====================================/////////////////=====================================*/
require_once('include/config.php'); 
$ncam = "";
if (isset($_GET['cam']))
  $ncam = $_GET['cam'];
$pathFolder= $path."/";
if (isset($_GET['folname']))
{
  $pathFolder = $pathFolder.$ncam."/".$_GET['folname'];
	
	if (!file_exists($pathFolder))
	mkdir($pathFolder,0777,TRUE);
}
header("Location: index.php?cam=".$ncam);

?>