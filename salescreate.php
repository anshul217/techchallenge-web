<?php
include('session.php');
?>
<?php

 function renderForm($sno, $Iname, $Idesc, $quantity,$dname,$Itype,$date)
 {
 ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><title>Sales creator</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="../css/styles.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 <script src="../js/script.js"></script>
 <link href="style.css" rel="stylesheet" type="text/css">
		</head>
		
		<body>
		<div style="position: fixed; top: 0px; width:100%; height: 80px;z-index: 10;">
     <table width="100%">
<tr >
<td bgcolor="white"><h1 align="center">Sales Management System</h1></td>
</tr>

</table>


</div>
 <div style="margin-top: 170px;">
 		<?php
		include('menu.php');?>
			<table align="center" border="0" cellpadding="0" cellspacing="0" width="969">
  			<tbody><tr>
    			
    			<td colspan="5" rowspan="5" ><p align="center" ><span ><u>Create Sales </u></span>
      			<table width="800" align="center" border="0" cellspacing="0" cellpadding="0">
        		<tr>
          		<td><table width="930" border="0" align="center"> <form action="" method="post" enctype="multipart/form-data">
                  <tr>
                    <td width="77">&nbsp;</td>
                    <td width="125">&nbsp;</td>
                    <td width="729">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >sno: *</span></td>
                    <td><input type="text" name="sno" size="5" value="<?php echo $sno; ?>" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >Item name: *</span></td>
                    <td><input type="text" name="Iname" size="80" value="<?php echo $Iname; ?>" /></td>
                  </tr>
                                    <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >Item description: *</span></td>
                    <td><input type="text" name="Idesc" size="80" value="<?php echo $Idesc; ?>" /></td>
                  </tr>


                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >Quantity: </span></td>
                    <td><input type="text" name="quantity" size="80" value="<?php echo $quantity; ?>" /></td>
                  </tr>


                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >Dealer Name:*</span></td>
                    <td><input type="text" name="dname" value="<?php echo $dname; ?>" /></td>
                  </tr>

                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >Item type : *</span></td>
                    <td>
<select name="Itype">
<option value="Electronics">Electronics</option>
<option value="Stationary">Stationary</option>
<option value="Household">Household</option>
<option value="Cloths">Cloths</option>

</select></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span  >Date: *</span></td>
                    <td><input type="date" name="date" placeholder="yyyy-mm-dd" value="<?php echo $date; ?>" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  ><span   >* Required</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Create New Record" /></td>
                  </tr> </form> 
                </table>
          		<p align="left"  >
	          	<p align="center"  >
	        
		
		<?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px ">'.$error.'</div>';
 }
 ?> 
 

 <div><br/>
   <br/>
   <br/>
 <p>&nbsp;</p>
 </div>

 
		</body>
		</html>

<?php 
 }
 
 
 

 // connect to the database
 include('dbc.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $sno = mysql_real_escape_string(htmlspecialchars($_POST['sno']));
 $Iname = mysql_real_escape_string(htmlspecialchars($_POST['Iname']));
$Idesc = mysql_real_escape_string(htmlspecialchars($_POST['Idesc']));
 $quantity = mysql_real_escape_string(htmlspecialchars($_POST['quantity']));
 $dname = mysql_real_escape_string(htmlspecialchars($_POST['dname']));
$Itype = mysql_real_escape_string(htmlspecialchars($_POST['Itype']));
$date = mysql_real_escape_string(htmlspecialchars($_POST['date'])); 
	

 // check to make sure both fields are entered
 if ($sno == '' || $Iname == '' || $Itype == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($sno, $Iname, $Idesc, $quantity,$dname,$Itype,$date, $error);
 }
 else
 {

 // save the data to the database
mysql_query("INSERT INTO item VALUES ('$sno','$Iname','$Idesc','$quantity','$dname','$Itype','$date')")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: salesview.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm($sno, $Iname, $Idesc, $quantity,$dname,$Itype,$date, $error);
 }
?>
        

	</tr>
      	</table>
      	<p align="center" >
      
      	<p >
        <span  >
  
      	<span  ></p>
      	</span>
      	<p   align="justify">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p    align="center">&nbsp;</p>
      	<p    align="center">&nbsp;</p>
      	<p   align="center">&nbsp;</p>
      	<p    align="justify">&nbsp;</p>
        <br /></td>
    	<td rowspan="5"   width="15"><br /></td>
  	</tr>

  
  		<tr>
    		<td   height="2" width="4"><span    /><br /></td>
    		<td colspan="3"   height="2"><span    /><br /></td>
    		<td colspan="3"   height="2"><span    /><br /></td>
    		<td   height="2" width="645"><span    /><br /></td>
    		<td   height="2" width="15"><span    /><br /></td>
  		</tr>
	</tbody></table>

</body></html>