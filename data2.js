<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title:{
		text: "User Concerns in Delivery Servives"
	},
	axisY: {
		title: "Feedmill Name"
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
<script src="data2.js"></script> 
</script>