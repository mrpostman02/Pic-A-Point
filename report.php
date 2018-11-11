<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style110 {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;	color: #000000;
}
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

<body style="background-color: #cc9900 ">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td width="780">
<?php include("header.php"); ?>	

	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"> <br>
        <br>
        <table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
          <tbody><tr>
            <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
            <td background="report.php_files/boxtopBG.gif" width="734"></td>
            <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
          </tr>
          <tr>
            <td background="images/boxleftBG.gif"></td>
            <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                <tbody><tr>
                  <td colspan="2" height="4"></td>
                </tr>
                <tr>
                  <td height="18"><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                      <tbody>
                        <tr valign="top">
                          <td colspan="2" class="headtext13" height="25" valign="middle">
                              </td>
                          <td height="25" colspan="3">&nbsp;</td>
                          </tr>
                        <tr valign="top">
                          <td>&nbsp;</td>
                          <td class="smallpoints" valign="middle" width="41%">&nbsp;</td>
                          <td width="12%">&nbsp;</td>
                          <td colspan="2" class="smallpoints" valign="middle">&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td width="11%"><div align="center"><span class="style110"></span> </div></td>
                          <td class="smallpoints" valign="middle">
                          <a href="datewise_list.php" class="link">
                          <button style="background-color: #FF5733; 
                          border: none;
                          border-radius: 8px;
                          color: white;
                          width: 200px;
                          height: 40px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          margin: 4px 2px;
                          cursor: pointer;">Datewise Report
        </button></a></td>
                          <td colspan="3" rowspan="3"><a href="" class="link">
                          <img src="images/logo1.png" height="150" width="300">
                          </a></td>
                          </tr>
                        <tr valign="top">
                          <td><div align="center"></div></td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr valign="top">
                          <td><div align="center"><span class="style110"></span></div></td>
                          <td class="smallpoints" valign="middle">
                          <a href="delivered_list.php" class="link">
                        <button style="background-color: #FF5733; 
                          border: none;
                          border-radius: 8px;
                          color: white;
                          width: 200px;
                          height: 40px;
                          text-align: center;
                          text-decoration: none;
                          display: inline-block;
                          margin: 4px 2px;
                          cursor: pointer;">Delivered Report
        </button> </a></td>
                          </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </tbody></table></td>
            <td background="report.php_files/boxrightBG.gif"></td>
          </tr>
          <tr>
            <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
            <td background="report.php_files/boxbtmBG.gif" width="734"></td>
            <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
          </tr>
        </tbody></table>
        <br>
          <br>
          <br>      
          <br>
    </div></td>
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