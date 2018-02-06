<?php

function connect()
{
	if (!$link) {
		$link = mysqli_connect("127.0.0.1", "root", "", "kinomonster");		
	}
	
	return $link;
}

function query($sql)
{
	$link = connect();	
	$queryResult = [];	

	if ($result = mysqli_query($link, $sql)) {
		$queryResult = mysqli_fetch_all($result, MYSQLI_ASSOC);

		mysqli_free_result($result);
		mysqli_close($link);
	}

	return $queryResult;
}

function exic($sql)
{
	$link = connect();	
	$result = mysqli_query($link, $sql);
	mysqli_close($link);

	return $result;
}

