<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: #cc9900">

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include("header.php");
?>

	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"> <br>
        <br>
        <table bgcolor="#ECECEC" border="0" cellpadding="2" cellspacing="2" align="center" width="50%">
        <tbody><tr>
         <td>
    <div style="height: 45px; width: 447px; background-color: yellow;"><strong><center><br><font color ="Black" size ="4px" style="padding-top:4px;">Admin Privileges </font></center></strong></div>
       </td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF">
          <div align="center">

          <a href="add_record.php" class="REDLink">
          <button class="button button3" style="border-radius: 8px; font-size: 15px;">Add Shipment</button></a>
          <a href="product_list.php" class="REDLink">
          <button class="button button3" style="border-radius: 8px; font-size: 15px">List of Shipment</button></a>
          <a href="report.php" class="REDLink">
          <button class="button button3" style="border-radius: 8px; font-size: 15px;">History</button></a>
          <a href="map_index.php" class="REDLink">
          <button class="button button3" style="border-radius: 8px; font-size: 15px;">Show Map</button></a>
          <a href="data_analytics.php" class="REDLink">
          <button class="button button3" style="border-radius: 8px; font-size: 15px;">Customers Feedback</button></a>

        </div>
        </td>
        </tr>
       
      </tbody></table>
            <br>
          <br>
          <br>      
          <br>
    </div></td>
  </tr>
  <tr>
    <td>
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="yellow" height="40" width="476">&nbsp;</td>
    <td bgcolor="yellow" width="304">
	</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</body></html>