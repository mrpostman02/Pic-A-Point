<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_picapoint
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/searchproductcs.css" rel="stylesheet" type="text/css">

<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
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
	
<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>


  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

  
    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <th width="55%"><div align="left" class="style3">Feedmill: </div></th>

            <td width="45%"><div align="left" class="style3">

              <?php echo $ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <th><div align="left" class="style3">Phone : </div></th>

            <td><div align="left" class="style3">

              <?php echo $phone; ?>
            </div></td>
          </tr>

          <tr>

            <th><div align="left" class="style3">Address : </div></th>

            <td><div align="left" class="style3">
			<?php echo $s_add; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <th width="55%" class="style3"><div align="left">Customer's Name : </div></th>

            <td width="45%" class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

          </tr>

          <tr>

            <th class="style3"><div align="left">Phone : </div></th>

            <td class="style3"><div align="left">
			<?php echo $r_phone; ?>
            </div></td>
          </tr>

          <tr>

            <th class="style3"><div align="left">Address : </div></th>

            <td class="style3"><div align="left">
			<?php echo $r_add; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr> 

      <th class="style3" bgcolor="#FFFFFF" align="right" width="336" height="30">Sales Order Number : </th> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><strong><b><?php echo $cons_no; ?></b></strong></font>&nbsp;</td> 
    </tr> 

    <tr>

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Product Type  :</th>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $type; ?>&nbsp;</td>
    </tr>

    <tr>

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Weight :</th>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
    </tr>

    <tr>

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Transaction Number  :</th>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $invice_no; ?>&nbsp;</td>
    </tr>

    <tr>

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Booking Mode :</th>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $book_mode; ?>&nbsp;</td>
    </tr>

    <tr>

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Total freight : </th>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $freight; ?>&nbsp;Rs.</td>
    </tr>

    <tr>

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Mode : </th>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $mode; ?></td>
    </tr> 

    <tr> 

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Pickup Date/Time  :</th> 

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo $pick_date; ?> -<span class="gentxt">
<?php echo $pick_time; ?>
        </span> </td> 
    </tr> 

    <tr> 

      <th class="style3" bgcolor="#FFFFFF" align="right" height="30">Status :</th> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $status; ?></td> 
    </tr> 

     

    <tr> 

      <th class="style3" bgcolor="#FFFFFF" align="right"  height="30">Comments :</th> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $comments; ?></td> 
    </tr> 
  </tbody></table> 

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="yellow" height="40" width="476">&nbsp;</td>
    <td bgcolor="yellow" width="304">&nbsp;</td>
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
<?php }//while
}//if
else {
echo '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">
<?php include("header.php"); ?>

	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Sales Order Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="track_status.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


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


</body>
</html>



<?php 
}//else
?>