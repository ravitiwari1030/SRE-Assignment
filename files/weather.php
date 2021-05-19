<?php
    require_once(dirname(__FILE__) . '/wp-config.php');
    $wp->init();
    $wp->parse_request();
    $wp->query_posts();
    $wp->register_globals();
    $wp->send_headers();

// set location
$url = "http://metaweather.com/api/location/2379574";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "Weather for Chicago, IL, USA";
echo "</br>";
echo "</br>";
echo "</br>";
echo "Weather State\n: ". $json_data['consolidated_weather'][0][weather_state_name];
echo "</br>";
echo "Temp (In Celsius)\r\n: ". $json_data['consolidated_weather'][0][the_temp];
?>
