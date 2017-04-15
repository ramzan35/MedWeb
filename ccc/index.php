 <!DOCTYPE html>
<html>
<head>
<?php
error_reporting(1);
?>
<title>Company name - title</title>
</head>


<body>

		

<div class="menu_header_left"> <span class="menu_text">Pharmacy</span>
</div>
<div class="menu_header_right"> </div>

<div id="Menu_content"> <a class="menu_item" href="index.php?catg=1 & subcatg=drugs and medications"><span>Drugs and Medications</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=medicalaccessories"><span>Medical Accessories</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=skinandbodycare"><span>Skin and Body Care</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=vaterinaryitems"><span>Vaterinary Items</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=cart"><span>CART</span></a><br>
</div>

<?php
if($_REQUEST['con']==11)
 {
	include("register.php");
	 	
}
if($_REQUEST['con']==12)
 {

$sel=mysql_query("select qty from items where itemno='$itemno'");
    $mat=mysql_fetch_array($sel);
	if($mat<=0)
	include("login.php");
else
echo "Sorry currently this item is out of stock";
	 }

if($_REQUEST['con']==13)
 {
	include("welcome.php");
	 }


if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='drugs and medications')
{
include("drugs and medications.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='cart')
{
include("log.php");
}
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='medicalaccessories')
{
include("medicalaccessories.php");
}
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='skinandbodycare')
{
include("skinandbodycare.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='vaterinaryitems')
{
include("vaterinaryitems.php");
}
}


?>

<div class="cleaner"></div>



</body>
