<?php
	
	if(isset($_POST['login'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$result = array('result' => '1', 'uname' => $uname);
		echo json_encode($result);

	} else {
		echo "unauthorized access.";
	}
?>