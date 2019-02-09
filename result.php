<?php
if($_SERVER['REQUEST_METHOD'] == "GET")
{
	echo $date=$_GET['date'];
	echo $city=$_GET['city'];
}
?>