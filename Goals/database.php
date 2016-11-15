<?php
	$connection = mysqli_connect('localhost', 'root', 'root', 'milega');

	mysqli_set_charset($connection, 'utf8');

	function postData($connection, $query) {
		$result = mysqli_query($connection, $query);
		if (!$result) {
			die(var_dump(mysqli_error($connection)));
		}
		return $result;
	}
