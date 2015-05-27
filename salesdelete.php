
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<body>

		<?php


 // connect to the database
 include('dbc.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['sno']) && is_numeric($_GET['sno']))
 {
 // get id value
 $sno = $_GET['sno'];
 
 // delete the entry
 $result = mysql_query("DELETE FROM item WHERE sno=$sno")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: salesview.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: SalesView.php");
 }
 
?>
        


</body></html>