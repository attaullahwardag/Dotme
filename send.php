<?php

	if(isset($_POST['name']) && isset($_POST['email'])){
		echo $_POST['name'];
		echo $_POST['email'];
		echo $_POST['subject'];
		echo $_POST['message'];
	}


?>