<?php

	require 'vendor/autoload.php';

	$app = new \Slim\Slim();

	$app->get('/friends', function () {
		echo 'Fetching all friends';
	})

	app->run();