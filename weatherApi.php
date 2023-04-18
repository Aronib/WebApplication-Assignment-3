<?php
$url = "http://api.openweathermap.org/data/2.5/weather?q=Dhaka,bd&APPID=01a23a862576fd4fcbc4a69a10b07c15";
$contents = file_get_contents($url);
$clim = json_decode($contents);

$temp_max = $clim->main->temp_max;
$temp_min = $clim->main->temp_min;
$wind_spd = $clim->wind->speed;
$feels_like = $clim->main->feels_like;
$humi = $clim->main->humidity;

$today = date("F j, Y, g:i a");
$city_name = $clim->name;

echo "<p class='display-2'><strong>$city_name</strong> </p>";
echo  $today."<br>";
echo "<p class='h3 mb-4'>Max Temp : $temp_max F &deg </p>";
echo "<p class='h4 mb-4'>Min Temp : $temp_min F &deg </p>";
echo "Feels Like: ". $feels_like." F &deg<br>";
echo "Humidity : ". $humi. "<br>";
echo "Wind Speed : ". $wind_spd."<br>";
?>