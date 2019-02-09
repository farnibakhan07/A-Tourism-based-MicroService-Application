<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    
	$date=$_GET['date'];
	$city=$_GET['city'];
   
	//----------------------find forecast data----------------------------//
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
$kelvin=273.00;
for($i=0;sizeof($op);$i++)
{
	if($op['list'][$i]['dt_txt']==$time)
	{
$temp=$op['list'][$i]['main']['temp']-$kelvin;
$humidity=$op['list'][$i]['main']['humidity'];
$condition=$op['list'][$i]['weather'][0]['main'];
break;
	}
}
$data = array();
$data['status'] = 'ok';
$data["temp"]=$temp;
$data["humidity"]=$humidity;
$data["condition"]=$condition;

//$data[] = array("temp" => $temp, "humidity" => $humidity, 'condition' => $condition);
    //returns data as JSON format
    echo json_encode($data);
}
else
{
$data = array();
$data['status'] = 'no';
echo json_encode($data);
}	

?>