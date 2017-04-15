<html>

<div><br/><center><h2>CART</font></h2></center></div>

<div><br/><center><h3>Your Goods</font></h3></center></div>
<div style="width:100%;float:left" >
<?php
error_reporting(1);
session_start();
$uname=$_SESSION['uname'];
include("config.php");
$un=$_REQUEST['uname'];

   $sel=mysql_query("select * from orders where uname='$un'");
   echo"<form method='post'><table border='0' align='center'><tr>";
   $n=1;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['itemno'];
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/itempics/$i.jpg' height='200' width='200'><br/>
  
 <b>Item No:</b>".$arr['itemno'].
   "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
   "<br><b>Order Number:</b>".$arr['order_no'].
   "<br><br>
     
   </td>";
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>
  
</div>

</body>
</html>





