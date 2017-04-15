<?php
session_start();
$id=$_SESSION['eid'];
include("config.php");
$itemno=$_REQUEST['itemno'];
?>
<body>
<div>
<div><br/><center><h2>Welcome 
<?php
$sel=mysql_query("select * from register where id='$id'");
  $arr=mysql_fetch_array($sel);
  echo $arr['title']."&nbsp;".$arr['fname'];
?>
</font></h2></center>
<h2 align="left"><a href="?log=out"><font color="#0099FF">LogOut</font></a></h2>
</div>
<div style="width:25%;float:right">
<br><br><br><br>
</div>
<center><div style="width:70%;float:right" align="center">
<center><h2>Order Form</font></h2></center>
<fieldset style="width:50%">
<br><br>
	<?php
	$sel=mysql_query("select * from items where itemno='$itemno'");
    $mat=mysql_fetch_array($sel);
	?>
<form method="post" name="f1">
<table width="366" border="0" align="center">

  <tr>
    <td><div align="center"><strong><font size="+1" >Product Name: </font></strong></div></td>
    <td><label>
    <input name="m1" type="text" id="m1" readonly="readonly" value="<?php echo $mat['desc'];?>">

    </label></td>
  </tr>

  <tr>
    <td width="164"><div align="center"><font size="+1" ><b> Item No:</b></font></div></td>
    <td width="192">
      
        <input name="m2" type="text" id="m2"  readonly="readonly" value="<?php echo $mat['itemno'];?>">    </td>
  </tr>

  <tr>
    <td><div align="center"><font size="+1" ><strong>Price:</strong></font></div></td>
    <td><input name="m3" type="text" id="m3"  readonly="readonly" value="<?php echo $mat['price'];?>">  </td>
  </tr>
  
  <tr>
    <td><div align="center"><font size="+1" ><b>&nbsp; User Name  : </b></font></div></td>
    <td><input name="t1" type="text" value="<?php
$sel=mysql_query("select * from register where id='$id'");
  $arr=mysql_fetch_array($sel);
  echo $arr['fname'];
?>" readonly="readonly"id="t1" ></td>
  </tr>

<tr>
    <td><div align="center"><font size="+1" ><b>&nbsp;Quantity:</b> </font></div></td>
    <td><label>
      <select name="sel" id="sel" required>
        <option value=1 selected>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
      </select>
    </label></td>
  </tr>

  <tr>
    <td><div align="center"><font size="+1" ><b>&nbsp;Account No: </b> </font></div></td>
    <td><input name="t2" type="text" id="t2" required></td>
  </tr>
  <tr> <td><div align="center"><font size="+1" ><b>Mobile no: </b></font></div></td>
    <td><input name="t3" type="text" id="t3" required></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" required><strong>Address:</strong></font></div></td>
    <td><label>
      <textarea name="t4" id="t4" required></textarea>
    </label></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" required><strong>Bank:</strong></font></div></td>
    <td><label>
      <select name="sel2" id="sel2" required>
        <option value="Peoples">Peoples Bank</option>
        <option value="Sampath">Sampath Bank</option>
        <option value="HNB">HNB Bank</option>
        <option value="Pan_Asia">Pan Asia Bank</option>
        <option value="NDB">NDB Bank</option>
        <option value="CDB"> CDB Bank</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" ><strong>City:</strong></font></div></td>
    <td><input name="t6" type="text" id="t6" required></td>
  </tr>
  <tr>
    <td colspan="2"><label><br>
    <center>
      <input name="send" type="submit" id="send" value="Send">
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
<?php
error_reporting(1);
session_start();
$id=$_SESSION['eid'];
include("config.php");
$itemno=$_REQUEST['itemno'];
if($_REQUEST['send'])
  {
  $pname=$_REQUEST['m1'];
  $itemno=$_REQUEST['m2'];
  $price=$_REQUEST['m3'];
  $size=$_REQUEST['sel'];
  $uname=$_REQUEST['t1'];
  $ac_no=$_REQUEST['t2'];
  $mob_no=$_REQUEST['t3'];
  $add=$_REQUEST['t4'];
  $bank=$_REQUEST['sel2'];
  $city=$_REQUEST['t6'];
  $order_no=ord.rand(100,500);
	
$pr = $price*$size;
$qty = mysql_query("select QTY from items where itemno='$itemno' ");
$matx=mysql_fetch_array($qty);

$x = $matx['QTY'];
echo $x;
echo $size;
if($size<=$x) {
 if(mysql_query("insert into orders values('$pname','$itemno','$pr','$size','$uname','$ac_no','$mob_no','$add','$bank','$city','$order_no')"))
    {
	 echo "<script>location.href='ordersent.php?order=$order_no&price=$pr'</script>";
	  }
	 mysql_query("UPDATE items SET QTY = QTY-'$size'  WHERE itemno='$itemno'");
    }
	else{
	echo "Sorry currently we are unable to";
}
}
	
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
