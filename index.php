<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: salesview.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>sales</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="css/styles.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/script.js"></script>
</head>
<body>
 <div style="position: fixed; top: 0px; width:100%; height: 100px;z-index: 10;">
     <table width="100%">
<tr >
<td align="center"><h1>Sales Management system</h1></td>
</tr>

</table>


</div>

<div id="main" >

<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>

</div>
</div>


</body>
</html>