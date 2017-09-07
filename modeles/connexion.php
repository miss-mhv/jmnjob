<?php
	/*
	:: Author etta egbe josoph
	:: year 2015
	*/
	
	function db_connect()
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "jmnjob";
		try
		{
			$dbh = new PDO("mysql:host=".$host.";dbname=".$db,"root");
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return($dbh);
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
            exit(0);
		}
	}
	
?>