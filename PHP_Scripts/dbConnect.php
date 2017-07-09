<?php
	/*
		author: Alfian Rizqi
		website: http://www.alfian-rizqi.com

		My Database is androiddb
		you need to change the database name rest the things are default if you are using wamp or xampp server
		You may need to change the host user name or password if you have changed the defaults in your server
	*/

	define('HOST','mysql.idhostinger.com');
	define('USER','u791611437_alfn');
	define('PASS','sandipaku');
	define('DB','u791611437_uas');

	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');