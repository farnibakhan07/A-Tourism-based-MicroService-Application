<?php
// Get cURL resource
$city="Umea";
$service_url="http://api.openweathermap.org/data/2.5/forecast?q=".$city."&APPID=a910c7369956f6ed0064e4c5a0dc56a1";
$date="12/06/2017";
$timestamp="12:00:00";
$time_tem=$date." ".$timestamp;
$date=date_create($time_tem);
$time=date_format($date,"Y-m-d H:i:s");
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
//$input = str_replace(array( '[', ']' ), '', $curl_response);
$op= json_decode($curl_response,true);
//$time="2017-12-08 12:00:00";
$kelvin=273.15;
for($i=0;$i<sizeof($op);$i++)
{
	if($op['list'][$i]['dt_txt']==$time)
	{
$temp=$op['list'][$i]['main']['temp']-$kelvin;
$humidity=$op['list'][$i]['main']['humidity'];
$condition=$op['list'][$i]['weather'][0]['main'];
break;
	}
}

//---------------------------------Recommendation Service-------------------------------------//
$url="http://52.35.95.98/testapi.php?cname=".$city;
$curl_taw_api = curl_init($url);
curl_setopt($curl_taw_api, CURLOPT_RETURNTRANSFER, true);
$curl_response_taw = curl_exec($curl_taw_api);
$tw= json_decode($curl_response_taw);
$j=0;
for($i=0;$i<sizeof($tw);$i++)
{
	echo "<br />";
if($condition=="Clear" and (($tw[$i]->type=="park") or ($tw[$i]->type=="point_of_interest") or ($tw[$i]->type=="campground") or ($tw[$i]->type=="cemetery")))
{
$place[$j]=$tw[$i]->name;
$address[$j]=$tw[$i]->formatted_address;
$type[$j]=$tw[$i]->type;
$j++;
}
else if((($condition=="Clouds") or ($condition=="Rain") or ($condition=="Snow")) and (($tw[$i]->type=="church") or ($tw[$i]->type=="museum")))
{
$place[$j]=$tw[$i]->name;
$address[$j]=$tw[$i]->formatted_address;
$type[$j]=$tw[$i]->type;
$j++;
}
}
$length=sizeof($place);
$data = array();
$data['status'] = 'ok';
$data[] = array("temp" => $temp, "humidity" => $humidity, 'condition' => $condition,"place"=>$place,"address"=>$address,"type"=>$type,"length"=>$length);
    //returns data as JSON format
    echo json_encode($data);
	



?>