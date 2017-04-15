<?php
error_reporting(1);
session_start();
$id=$_SESSION['eid'];
include("config.php");
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($id=="")
{
header("location:index.php");
}
?>

<html>
<div>
<div style="width:25%;float:right">
<br><h2 align="right"><a href="?log=out"><font color="#0099FF">LogOut</font></a></h2><br><br><br><br>

</div>
<br><br>
<center><div style="width:70%;float:right" align="center">
<div><br/><center><h2><size="+2">ThankYou for Shopping With Us</font></h2></center>
</div>
<br><br><br>
<fieldset style="width:50%">
<br><br>
<font color="#660033" size="+1" ><b>Your order is sent successfully!!! </b></font><br/><br/>
<font size="+1" face="Comic Sans MS" color="#660033" ><b>Your order no. is:</b><font color="#FF3366"><?php echo $_REQUEST['order'];?></font><br/><br/></font>
<font size="+1" face="Comic Sans MS" color="#660033" ><b>Price is:</b><font color="#FF3366"><?php echo $_REQUEST['price'];?></font><br/><br/></font>

</fieldset>
</div>
</center>

</div>
</html>