<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style_002.htm" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style2 {font-weight: bold}
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
<?php include("header.php"); ?>
<script language="javascript">
function validate()
  {
 if (document.form1.track.value == "" )
		 {
			alert("Consignment No is required.");
			document.form1.track.focus( );
			return false;
		}
	}
</script>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="780">
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
      <tbody><tr>
        <td class="Partext1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
input[type=text], select, textarea {
    width: 450px;
    height: 30px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=submit] {
    background-color: #FF5733;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}
input[type=submit]:hover {
    background-color: red;
}
</style></td>
      </tr>
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
            <form action="new_track_submit.php" method="post" name="form1" id="form1" onsubmit="return validate()"></form>
           
              <tr>
                <td colspan="2" class="bottom" valign="middle">&nbsp;</td>
              </tr>
              
             
              <tr bgcolor="white">
                
              </tr>
              <tr bgcolor="white">
			  <form action="search_product.php" method="post">
          <br>
          <br>
                <td valign="top" cellspacing=10 style="width: 35%; font-size: 15px; padding-top: 12px;"><b>Enter Sales Order Number: </b></td>
                <td valign="top"><div align="left">
                  <input name="Consignment" class="gentxt" id="track" maxlength="50" type="text" style="width: 100%;">
                </div></td>
              </tr>
              <tr bgcolor="white">
                <td height="31" valign="top">&nbsp;</td>
                <td valign="right"><center><div align="right">

                  <input name="Submit" class="gentxt" value="Submit" type="submit" style="border-radius: 8px; font-size: 13px;">
                </div></center></td>
              </form>
			  </tr>
        <br>
         <tr bgcolor="white">
                <td colspan="2" class="aalpha" bgcolor="#FFFFFF" height="34" valign="top"><div class="gentxt" align="center"><strong><font size ="3px"> Note:</font></strong><font size="2px">&nbsp;  Please double check your Sales Order Number to avoid error of tracking the product. Thank you!</font><br>
                  <br>
                </div></td>
              </tr>
              <tr bgcolor="white">
                <td colspan="2" class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
      </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body></html>