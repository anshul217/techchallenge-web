<?php
include('session.php');
?>
<?php
include('dbc.php');
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>Content Manager</title>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure to Delete?');
}
</script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="css/styles.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/script.js"></script>
</head>


<body>
   <div style="position: fixed; top: 0px; width:100%; height: 80px;z-index: 10;">
     <table width="100%">
<tr >
<td align="center"><h1>Sales Management system</h1></td>
</tr>

</table>


</div>

 <div style="margin-top: 170px;">
 		<?php
		include('menu.php');?>
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="90%">
  		<tbody><tr>

    		<td colspan="5" rowspan="5" bgcolor="#FFFFFF"><p align="center"  ><span  <u>Listing of Sales 
          	</u></span>
      		<table width="800" align="center" border="0" cellspacing="0" cellpadding="0">
        	<tr>
          	<td>
	        
		
		<?php

			/* VIEW.PHP Displays all data from 'players' table*/

			// connect to the database
			include('dbc.php');

			// get results from database
			$result = mysql_query("SELECT * FROM item order by sno") 
			or die(mysql_error());  
		
			// display data in table
	
		
	
			echo "<table border='1' cellpadding='6'> ";
					
			echo "<tr> <th>Sno</th> <th>Item</th> <th>quantity</th>   <th>Item Type</th><th>dealer</th><th>delete</th></tr>";

			// loop through results of database query, displaying them in the table
			while($row = mysql_fetch_array( $result )) {
		
			// echo out the contents of each row into a table
			echo "<tr>";
			echo '<td align="center">' . $row['sno'] . '</td>';
			echo '<td>' . $row['Iname'] . '</td>';
			echo '<td>' . $row['quantity'] . '</td>';
			echo '<td>' . $row['Itype'] . '</td>';
echo '<td>' . $row['dname'] . '</td>';

			echo '<td align="center"><a href="salesdelete.php?sno=' . $row['sno'] . ' "onclick="return checkDelete()" ">Delete</a></td>';
			echo "</tr>"; 
			} 

			// close table>
			
			echo "</table>";
		?>
		<p><a href="salescreate.php"  >Create New Record</a></p>
        </tr>
      	</table>
      	<p align="center"  >
      
      	<p  >
        <span  >
  
      	<span  ></p>
      	</span>
      	<p align="justify">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p  align="justify">&nbsp;</p>
        <br /></td>
    	<td rowspan="5"   width="15"><br /></td>
  	</tr>

  
  		<tr>
    		<td   height="2" width="4"><span  /><br /></td>
    		<td colspan="3"   height="2"><span  /><br /></td>
    		<td colspan="3"   height="2"><span  /><br /></td>
    		<td   height="2" width="645"><span  /><br /></td>
    		<td   height="2" width="15"><span  /><br /></td>
  		</tr>
	</tbody></table>

</body></html>
</head>