<?php
	ini_set('display_errors','On');

	echo "testing ..testing.. 1...2...3...4<br/>";

	require_once('manage.php');

		$m = new manage("hey, there...");

		echo "new manage: <br/>";

		$m->doSomething("great googamooga!");

