<?php

	require_once('database.php');

	if(isset($_POST['feedback_submit'])){
		$satisfied = $_POST['satisfied'];
		$receive = $_POST['receive'];



		$sql = "INSERT INTO tbl_user_feedbacks (delivery_satisfaction, delivery_time) VALUES('$satisfied', '$receive')";

	mysql_query($sql);
	header('Location: index.php'); 

	}
?>