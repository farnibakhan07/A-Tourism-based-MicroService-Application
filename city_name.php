<?php
include('config.php');
$query="select distinct countryName from city_table order by countryName asc";
$count=mysqli_query($con,$query);
if($count)
{
while($result=mysqli_fetch_assoc($count))
{
$country[]=$result['countryName'];
}
}
?>