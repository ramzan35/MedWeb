<?php

$i=$_REQUEST['itemno'];

include("config.php");
if($_REQUEST['sub'])
{
$id=$_REQUEST['t1'];
$pass=$_REQUEST['p1'];
   $sel=mysql_query("select id,pass from register where   id='$id'");
  $arr=mysql_fetch_array($sel);
if(($arr['id']==$id) and( $arr['pass']==$pass))
  {
  session_start();
   $_SESSION['eid']=$id;

echo "<script>location.href='order.php?itemno=$i'</script>";
   }
else
{
$er="id and password do not match";
}
}
?>
<html>
<div><center><h2>Login your Account</font></h2></center></div>

<br><br>
<div style="width:70%;float:right" align="center" >
<center><fieldset style="width:50%">
<br><br>
<table width="244" border="0" align="center">
<form method="post">
<tr><td colspan="2"><?php echo "<font color='green'>$er</font>";?></td></tr>
  <tr>
    <td width="90"><div align="center"><font size="+1" face="Comic Sans MS">UserID:</font></div></td>
    <td width="144"><label>
      <input name="t1" type="text" id="t1">
    </label></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS">Password:</font></div></td>
    <td><input name="p1" type="password" id="p1"></td>
  </tr>
  <tr>
    <td><label>
      <div align="center">
<input name="sub" type="submit" value="Login">
        </div>
    </label></td>
    <td><strong><a href="index.php?con=11">Sign Up</font></a></strong> </td>
  </tr>
  </form>
</table>
</fieldset></center>
</div>

</div>

</body>
</html>