<?php
include 'connect.php';

?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <style >  .table{  font-family: Montserrat, sans-serif;}
 .myform {
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
 }
</style>
<title>Mh-Ticket</title>

</head>
<div><center><img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png"/></div>
<br>
<br>
<body style="background-color: F5F1F0;">
	<h1><center><b>Admin Sign In</center></b></h1>

<form method='post' action ='adminauthenticate.php'  class="myform">
<div>
<table align="center" class="table">
<tr><td><h2><b>Email id : </b></h2></td> <td><input type="email" name="email" maxlength='50'></td></tr>
<tr><td><h2><b> Password : </b></h2></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
<tr><td colspan='2'><center><button type='Submit' style="background-color:black; border-color:black" name='login_submit' ><b>Sign in </b> </button></center></td></tr></table>


</table>
</form>
<center><h3><a href='sindex.php' style="color: black"><b>User Sign In ?</b></a></h3></center>

</body style="background-color: F5F1F0;">
</html>