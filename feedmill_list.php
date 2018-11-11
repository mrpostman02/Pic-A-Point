<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM tbl_offices";
$result = dbQuery($sql);		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body style="background-color: #cc9900">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

<?php include("header.php"); ?>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
  </tbody></table>
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="1" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:30px;">
      <th class="newtext" bgcolor="#EDEDED" width="20%" style="height:40px;"><div align="center">Feedmill</div></th>
      <th class="newtext" bgcolor="#EDEDED" width="20%" style="height:40px;"><div align="center">Address</div></th>
	  <th class="newtext" bgcolor="#EDEDED" width="10%" style="height:40px;"><div align="center">City</div></th>
      <th class="newtext" bgcolor="#EDEDED" width="15%" style="height:40px;"><div align="center">Phone Numner</div></th>
      <th class="newtext" bgcolor="#EDEDED" width="20%" style="height:40px;"><div align="center">Availabe Time Frame</div></th>
      <th class="newtext" bgcolor="#EDEDED" width="15%" style="height:40px;"><div align="center">Contact Person</div></th>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">
	
      <td class="gentxt" style="height:40px;"><div align="center"><?php echo $off_name; ?></div></td>
      <td class="gentxt" style="height:40px;"><div align="center"><?php echo $address; ?></div></td>
      <td class="gentxt" style="height:40px;"><div align="center"><?php echo $city; ?></div></td>
      <td class="gentxt" style="height:40px;"><div align="center"><?php echo $ph_no; ?></div></td>
      <td class="gentxt" style="height:40px;"><div align="center"><?php echo $office_time; ?></div></td>
	  <td class="gentxt" style="height:40px;"><div align="center"><?php echo $contact_person; ?></div></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="yellow" height="40" width="476">&nbsp;</td>
    <td bgcolor="yellow" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>