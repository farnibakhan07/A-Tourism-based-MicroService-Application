<?php
if(isset($_POST['city']))
{
include('config.php');
echo $city=$_POST['city'];
$query="select distinct cityName from city_table where countryName='$city' order by cityName asc";
$count=mysqli_query($con,$query);
if($count)
{
while($result=mysqli_fetch_assoc($count))
{
 echo "<option id='city' name='city' value=\"".$result['cityName']."\">".$result['cityName']."</option>";
}
}
}
?>