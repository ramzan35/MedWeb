<html>
<head>
</head>
<body>
<div><br/><center><h2>Register Yourself</font></h2></center></div>
<div>
<div style="width:25%;float:right">
<br><br><br><br><br>
</div>
<br><br>
<center><div style="width:70%;float:right" align="center">
<fieldset style="width:50%">
<br><br>
<form method="post" name="f1">
<table width="366" border="0" align="center">

  <tr>
    <td><div align="center"><strong>Title:</font></strong></div></td>
    <td><label>
      <select name="sel1" id="sel1" required>
        <option value="Mr.">Mr.</option>
        <option value="Ms.">Ms.</option>
        <option value="Mrs.">Mrs.</option>
      </select>
    </label></td>
  </tr>

  <tr>
    <td width="164"><div align="center"><b> First&nbsp;Name:</b></font></div></td>
    <td width="192">
      
        <input name="t1" type="text" id="t1" required>    </td>
  </tr>

  <tr>
    <td><div align="center"><strong>Last name:</strong></font></div></td>
    <td><input name="t2" type="text" id="t2" required ></td>
  </tr>

  <tr>
    <td><div align="center"><b>&nbsp;Gender:</b> </font></div></td>
    <td><input name="r1" type="radio" value="male" required>
      <strong>Male</strong>
        <input name="r1" type="radio" value="female">
        <strong>Female</strong></td>
  </tr>

  <tr>
    <td><div align="center"><b>&nbsp;Enter Email : </b></font></div></td>
    <td><input name="t3" type="text" id="t3" required></td>
  </tr>

  <tr>
    <td><div align="center"><b>&nbsp;Choose a  Password:</b> </font></div></td>
    <td><input name="p1" type="text" id="p1" required></td>
  </tr>

  <tr> <td><div align="center"><b>Phone no: </b></font></div></td>
    <td><input name="t5" type="text" id="t5" required></td>
  </tr>

  <tr>
    <td><div align="center"><strong>Address:</strong></font></div></td>
    <td><label>
      <textarea name="t6" id="t6" required></textarea>
    </label></td>
  </tr>

  <tr>
    <td><div align="center"><strong>City:</strong></font></div></td>
    <td><input name="t7" type="text" id="t7" required></td>
  </tr>

  <tr>
    <td><div align="center"><strong>Country:</strong></font></div></td>
    <td><input name="t8" type="text" id="t8" required></td>
  </tr>

  <tr>
    <td><div align="center"><strong>Date of Birth: </font></strong></div></td>
    <td><label>
      <input name="t9" type="text" id="t9" required>
    </label></td>
  </tr>

  <tr>
    <td colspan="2"><label><br>
    <center>
      <input name="sub" type="submit" id="sub" value="Create my Account">
    </center>
    </label></td>
    </tr>
 
</table>
 </form>
</fieldset>
</div>
</center>

</div>

</body>
</html>
<?php
include("config.php");
$title=$_REQUEST['sel1'];
$fname=$_REQUEST['t1'];
$lname=$_REQUEST['t2'];
$gen=$_REQUEST['r1'];
$id=$_REQUEST['t3'];
$pass=$_REQUEST['p1'];
$phone=$_REQUEST['t5'];
$add=$_REQUEST['t6'];
$city=$_REQUEST['t7'];
$coun=$_REQUEST['t8'];
$dob=$_REQUEST['t9'];
if($_REQUEST['sub'])
{
$sel=mysql_query("select id from register where id='$id' ");
$arr=mysql_fetch_array($sel);

if($arr['id']!=$id)
  {
   if(mysql_query("insert into register values('$title','$fname','$lname','$gen','$id','$pass','$phone','$add','$city','$coun','$dob')"))
	   {
		echo "<script>location.href='index.php?con=13 & wel=$id'</script>";
	   }
	 }
else 
{
echo "user already exists";
}
}
?>