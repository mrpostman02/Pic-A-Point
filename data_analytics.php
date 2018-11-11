<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php
 
$dataPoints = array( 
  array("y" => 5000,"label" => "Line 1 - Lanao Del Norte" ),
  array("y" => 2100,"label" => "Line 2 - Capas, Tarlac " ),
  array("y" => 1765,"label" => "Line 3 - Conception, Tarlac" )
);
?>


<head>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pic-A-Point</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/google.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
		}
		#data, #allData {
			display: none;
		}
	</style>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
    text: ""
  },
  axisY: {
    title: "Number of User Feedbacks in Delivery Servive"
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0",
    indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontWeight: "bolder",
    indexLabelFontColor: "white",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}


</script>
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
    <div style="height: 45px; width: 447px; background-color: red; opacity: 0.7"><strong><center><br><font color ="white" size ="4px" style="padding-top:4px;">Customer's Feedback Data Analytics</font></center></strong></div>
       </td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF">
          <div align="center">
          <div class="container">
		<center><h1></h1></center>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	</div>

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
  
</body>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCBdvpq_RthsafJRRCJNgUkZ4RNwXtie8&callback=loadMap"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>    




</html>