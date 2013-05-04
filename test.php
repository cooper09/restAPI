<?php

	echo "testing ..testing.. 1...2...3...4<br/>";

	require_once('manage.php');

		$m = new manage(23);

		echo "new manage: ".$m ."<br/>";

		$m->deleteEntry();


?>