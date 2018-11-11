<?php 
session_start();
require_once('library.php');
$rand = get_rand_id(10);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/addproduct.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
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
}
input[type=text], select, textarea {
    width: 300px;
    padding: 12px;
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

</style>
<link type="text/css" rel="stylesheet" href="css/style.htm">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style> 

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-weight: bold;
	color: #003399;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { 
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { 
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

</script>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
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
<script type="text/javascript">

var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();


function ds_getel(id) {
	return document.getElementById(id);
}


function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}


var ds_oe = ds_getel('ds_calclass');

var ds_ce = ds_getel('ds_conclass');


var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; 

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; 

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; 


function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';

}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';

}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}


function ds_draw_calendar(m, y) {

	ds_ob_clean();

	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;

	ds_echo (ds_template_new_week());

	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		
		if (j == 0 && !first_loop) {
		
			ds_echo (ds_template_new_week());
		}
	
		ds_echo (ds_template_day(i + 1, m, y));
	
		first_loop = 0;
		
		j ++;
		j %= 7;

	}
	
	ds_echo (ds_template_main_below());
	
	ds_ob_flush();

	ds_ce.scrollIntoView();
}


function ds_sh(t) {
	
	ds_element = t;
	
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();

	ds_draw_calendar(ds_c_month, ds_c_year);

	ds_ce.style.display = '';

	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';

	ds_ce.scrollIntoView();
}

function ds_hi() {
	ds_ce.style.display = 'none';
}

function ds_nm() {
	ds_c_month ++;
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	ds_draw_calendar(ds_c_month, ds_c_year);
}

function ds_pm() {
	ds_c_month = ds_c_month - 1; 
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; 
	}

	ds_draw_calendar(ds_c_month, ds_c_year);
}

function ds_ny() {

	ds_c_year++;

	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_py() {
	
	ds_c_year = ds_c_year - 1; 
	ds_draw_calendar(ds_c_month, ds_c_year);
}

function ds_format_date(d, m, y) {
	
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	return d2 + '/' + m2 + '/'+ y;
}

function ds_onclick(d, m, y) {

	ds_hi();
	
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);

	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	
	} else {
		alert (ds_format_date(d, m, y));
	}
}

function getSelected(opt)
 {
 
 	var opt=document.frmExport.opt;
            for (var intLoop = 0; intLoop < opt.length; intLoop++)
			 {
			  if (!(opt.options[intLoop].selected))
			   {
			   		alert("Select any one field!");
					return false;
               }
		    }
			return true;           
  }

</script>
 <br/>

<form action="process.php?action=add_record" method="post" name="frmShipment" > 
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
<tbody><tr>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"></td>
    <td></td>
    <td width="18"></td>
  </tr>
  <tr>
    <td></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><strong>
                	<button style ="
                	background-color: #FF5733; 
				    border: none;
				    color: white;
				    width: 100%;
				    height: 30px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    margin: 4px 2px;
				    cursor: pointer;
                	"> Feedmill Information </button></strong></div>
            </div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Feedmill Line Name :</td>
            <td>&nbsp;</td>
            <td>
            	<select id="Shiptype" name="Shippername" style="width: 70%">
                <option value="Line 1 - Lanao Del Norte" selected="selected">Line 1 - Lanao Del Norte</option>
                <option value="Line 2 - Capas, Tarlac">Line 2 - Capas, Tarlac</option>
                <option value="Line 3 - Conception, Tarlact">Line 3 - Conception, Tarlac</option>
            </select>
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone   :</td>
            <td>&nbsp;</td>
            <td><input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right">

           <div class="headtext13" align="left"><strong>
           	<button style ="
                	background-color: #FF5733; 
				    border: none;
				    color: white;
				    width: 100%;
				    height: 30px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    margin: 4px 2px;
				    cursor: pointer;
                	">Customer's Details :</button></strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Customer's Name : </td>
            <td>&nbsp;</td>
            <td><input name="Receivername" id="Receivername" maxlength="100" size="40" type="TEXT">
                <span class="REDLink">*</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone : </td>
            <td>&nbsp;</td>
            <td><input name="Receiverphone" id="Receiverphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right"> Address: : </td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right">
            <div class="headtext13" align="left">
           <strong>
           <button style ="
                	background-color: #FF5733; 
				    border: none;
				    color: white;
				    width: 100%;
				    height: 30px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    margin: 4px 2px;
				    cursor: pointer;
                	">Delivery Details :</button></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Sales Order Number  : </td>
            <td width="13">&nbsp;</td>
            <td width="477"><input name="ConsignmentNo" value="<?php echo strtoupper($rand); ?>" id="ConsignmentNo"  readonly="true" maxlength="13" size="30"  type="TEXT">
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Type of Product:  :</td>
            <td>&nbsp;</td>
            <td><select id="Shiptype" name="Shiptype" style="width: 70%">
                <option value="Sack of Rice" selected="selected">Sack of Rice</option>
                <option value="Sack of Flour">Sack of Flour</option>
                <option value="Sack of Wheat">Sack of Wheat</option>
            </select>
			</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Weight  : </td>
            <td>&nbsp;</td>
            <td><input id="Weight" size="10" maxlength="10" name="Weight" type="TEXT">
              (kg)</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Transaction Number  :</td>
            <td>&nbsp;</td>
            <td><input name="Invoiceno" id="Invoiceno" size="40" maxlength="20" onKeyUp="check_phone('Invoiceno')" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Quantity  :</td>
            <td>&nbsp;</td>
            <td><input name="Qnty" id="Qnty" maxlength="10" size="20" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Booking Mode :</td>
            <td>&nbsp;</td>
            <td><select name="Bookingmode" id="Bookingmode" style="width: 70%;">
                <option selected="selected" value="Paid">Paid</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Cash">Cash</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Total freight : </td>
            <td>&nbsp;</td>
            <td><input id="Totalfreight" size="10" maxlength="13" name="Totalfreight" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Mode : </td>
            <td>&nbsp;</td>
            <td><select name="Mode" id="Mode" style="width: 70%">
                <option selected="selected" value="Air">Air</option>
                <option value="Road">Road</option>
                <option value="Train">Train</option>
				<option value="Sea">Sea</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right"><span class="TrackMediumBlue">Departure Time : </span></td>
            <td>&nbsp;</td>
            <td><input name="Depttime" id="Depttime" maxlength="50" size="20" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right">Destination:</td>
            <td>&nbsp;</td>
            <td><input name="Destination" id="Destination" maxlength="50" size="40" type="TEXT">
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right">Pickup Date  :</td>
            <td>&nbsp;</td>
            <td><input name="Packupdate" id="Packupdate" readonly="True" style="cursor: text;" onClick="ds_sh(this);" maxlength="15" type="TEXT">
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Pickup Time  :</td>
            <td>&nbsp;</td>
            <td><input name="Pickuptime" id="Pickuptime" maxlength="50" size="20" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Status :</td>
            <td>&nbsp;</td>
            <td><select name="status" id="status" style="width: 70%;">
                <option selected="selected" value="In Transit">In Transit</option>
            </select></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Comments :</td>
            <td>&nbsp;</td>
            <td><textarea name="Comments" cols="40" rows="4" id="Comments"></textarea></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <br>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Receivername','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','Invoiceno','','R','Qnty','','RisNum','Totalfreight','','R','Pickuptime','','R','Shipperaddress','','R','Comments','','R','Weight','','RisNum','Totalfreight','','R');return document.MM_returnValue" value="Add Shipment"></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td></td>
  </tr>
  <tr>
    <td width="18"></td>
    <td></td>
    <td width="18"></td>
  </tr>
</tbody></table>
<br>
</form> 

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body></html>