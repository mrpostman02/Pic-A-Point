<?php 
session_start();
require_once('library.php');
$rand = get_rand_id(8);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
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
-->
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
function MM_findObj(n, d) { //v4.01
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
<body style="background-color: #cc9900">
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

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
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
	// Define width the day row.
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
	// Make a date object.
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
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; 
	ds_draw_calendar(ds_c_month, ds_c_year);
}


</script>
 <br/>
<form action="process.php?action=add_office" method="post" name="frmShipment" > 
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
<tbody><tr>
<td width="60%">&nbsp;</td>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"><img src="" alt="" height="13" width="18"></td>
    <td background="" width="734"></td>
    <td width="18"><img src="" alt="" height="13" width="18"></td>
  </tr>
  <tr>
    <td background=""></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
  
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><center>
                	<button style ="
                	background-color: #FF5733; 
				    border: none;
				    color: white;
				    width: 600px;
				    height: 30px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    margin: 4px 2px;
				    cursor: pointer;
                	"> New Feedmill Infrastructure </button></center>
            </div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Feedmill  Name   :</td>
            <td width="13">&nbsp;</td>
            <td width="477">
            	<select id="OfficeName" name="OfficeName" style="width: 95%" >
                <option value="Line 1 - Lanao Del Norte" selected="selected">Line 1 - Lanao Del Norte</option>
                <option value="Line 2 - Capas, Tarlac">Line 2 - Capas, Tarlac</option>
                <option value="Line 3 - Conception, Tarlact">Line 3 - Conception, Tarlac</option>
            </select>
              </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="OfficeAddress" cols="27" rows="2" id="OfficeAddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">City  :</td>
            <td>&nbsp;</td>
            <td><input name="City" id="City" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone Number : </td>
            <td>&nbsp;</td>
            <td><input name="PhoneNo" id="PhoneNo" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Time Frame : </td>
            <td>&nbsp;</td>
            <td><input name="OfficeTiming" id="OfficeTiming" maxlength="30" size="40" type="TEXT"></td>
          </tr>
          
          <tr>
            <td class="TrackMediumBlue" align="right">Contact Person : </td>
            <td>&nbsp;</td>
            <td><input name="ContactPerson" id="ContactPerson" maxlength="50" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('OfficeName','','R','City','','R','PhoneNo','','R','OfficeTiming','','R','ContactPerson','','R','OfficeAddress','','R');return document.MM_returnValue" value="Add New Office " style="margin-right: 28px;"></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background=""></td>
  </tr>
  <tr>
    <td width="18"><img src="" alt="" height="12" width="18"></td>
    <td background="" width="734"></td>
    <td width="18"><img src="" alt="" height="12" width="18"></td>
  </tr>
</tbody></table>
<br>
</form> 

	</td>
  </tr>
  <tr>
    <td>
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
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