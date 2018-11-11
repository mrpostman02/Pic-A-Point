<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
  $error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
    FROM tbl_offices";
$result = dbQuery($sql);

?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/newadmin.css" rel="stylesheet" type="text/css">

<script src="login.js">
</script></head>
 
<body onLoad="document.form1.txtusername.focus();" style="background-color: #cc9900;">
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<table id="Outer" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>

    <td><table id="inner" border="0" cellpadding="3" cellspacing="3" height="500" align="center" width="96%">

      <tbody><tr>
        <td>
    <link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style2 {color: #FFFFFF}
</style>
<table border="0" cellpadding="0" cellspacing="0" width="782">
<tbody><tr>
<td colspan="15"><img src="images/header1.jpg" height="250" width="780"></td>
</tr>
      <tr>
        <td style="border: 1px solid yellow;"><div align="center" style="background-color: yellow;" >
          <span class="redtext"><strong>          </strong></span><br>  
              <br>
        </div>
          <table border="0" cellpadding="0" cellspacing="0" align="center" width="300" style="border: 1px solid orange;>
            <tbody><tr>
              <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
              <br>
              <td background="images/boxtopBG.gif" width="734"></td>
              <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
            </tr>
            <tr>
              <td background="images/boxleftBG.gif"></td>
              <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                  <tbody><tr>
                    <td colspan="2" height="4"></td>
                  </tr>
                  <tr>
                    <td height="18"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody><tr>
                        <td colspan="3" class="smalltextgrey" width="378">
            </td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                      <tbody><tr>
                        <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
                          <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%">
                              <tbody>
                              <tr>
                                <td colspan="3" class="smalltextgrey">
                <div class="headtext13" style="padding-left: 20px;"><strong><font size="4px"> Login </font></strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" height="10">
                <font color="#FF0000" style="font-size:20px;">
                <?php echo $error; ?>
                </font>
                </td>
                                </tr>
                              <tr>
                                <td width="115">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:15px;">Username</font></td>
                                <td width="3">:</td>
                                <td width="160">
                <input name="txtusername" class="forminput" id="txtusername" maxlength="20" type="TEXT" 
                style="
                width: 100%;
                border-style: red;
                border-radius: 8px;
                margin: 5px 0;
                opacity: 0.85;
                display: inline-block;
                font-size: 17px;
                line-height: 20px;
                text-decoration: none;
                "></td>
                </tr>
                    <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:15px;">Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password" style="
                width: 100%;
                border-style: red;
                border-radius: 8px;
                margin: 5px 0;
                opacity: 0.85;
                display: inline-block;
                font-size: 17px;
                line-height: 20px;
                text-decoration: none;
                                   "></td>
                              </tr>
                <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:15px;">Feedmill</font></td>
                                <td>:</td>
                                <td>
                <select name="OfficeName" style="width: 100%; font-size: 15px; border-radius: 8px; height: 28px;">
      <?php 
      while($data = dbFetchAssoc($result)){
      ?>
      <option class="center" value="<?php echo $data['off_name']; ?>" ><?php echo $data['off_name']; ?></option>
      <?php 
      }//while
      ?>
      </select>
                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input name="Submit" class="green-button" value="Login Now" type="submit" style="padding:5px 10px;
                                  font-weight:bold;
                                  background-color: red;
                                  color: white;
                                  padding: 12px 20px;
                                  border: none;
                                  border-radius: 8px;
                                  width: 100%;
                                  cursor: pointer;
                                  float: right;
                                 background-color: red;
}



                                "></td>
                              </tr>
                          </tbody>
              </table>
              </form>
              </td>
                        
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </tbody></table></td>
              <td background="images/boxrightBG.gif"></td>
            </tr>
            <tr>
              <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
              <td background="images/boxbtmBG.gif" width="734"></td>
              <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
            </tr>
          </tbody></table>
          <br>
          <br></td>
      </tr>
      <tr>
        <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td bgcolor="yellow" height="55" width="476">&nbsp;</td>
    <td bgcolor="yellow" width="304"><div align="right"><a href="index.php" style="border-radius: 5px; padding: 14px; padding-right: 20px; padding-left: 20px; cursor: pointer; text-decoration: none; background-color: red; color: white; ">Home</a>&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
</tbody></table>
</td>
      </tr>
      
    </tbody></table></td>
  </tr>
</tbody></table>
</td></tr></tbody></table>
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</body></html>