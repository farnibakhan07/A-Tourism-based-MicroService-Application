<?php
if($_SERVER['REQUEST_METHOD'] == "GET")
{
	$date=$_GET['date'];
	$city=$_GET['city'];
	
//$service_url="http://api.openweathermap.org/data/2.5/forecast?id=602913&APPID=a910c7369956f6ed0064e4c5a0dc56a1";
$service_url="http://api.openweathermap.org/data/2.5/forecast?q=".$city."&APPID=a910c7369956f6ed0064e4c5a0dc56a1";
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
//$input = str_replace(array( '[', ']' ), '', $curl_response);
$op= json_decode($curl_response,true);
$timestamp="12:00:00";
$time_tem=$date." ".$timestamp;
$date=date_create($time_tem);
$time=date_format($date,"Y-m-d H:i:s");
//$time="2017-12-08 12:00:00";
$kelvin=273.15;
for($i=0;sizeof($op);$i++)
{
	if($op['list'][$i]['dt_txt']==$time)
	{
echo $temp=$op['list'][$i]['main']['temp']-$kelvin."°C<br />";
echo $humidity=$op['list'][$i]['main']['humidity']."<br />";
echo $condition=$op['list'][$i]['weather'][0]['main']."<br />";
break;
	}
}
}
?>