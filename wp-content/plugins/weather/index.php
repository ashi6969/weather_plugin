<?php
/*
Plugin Name: custom_weather_plugin
Description: This is a simple WordPress plugin.
Version: 1.0
Author: Ashutosh Sharma
*/


function weather_form() {
?>
	<div class="weather-widget">
    <h2>Weather Widget</h2>
    <form id="weather-widget-form2">
        <input type="text" id="weather-location2" placeholder="Enter location">
        <button type="submit">Get Weather</button>
    </form>
    <div id="weather-widget-result2"></div>
</div>
<?php

}
add_shortcode('weather-form', 'weather_form');

function get_weather_data() {
    $api_key = '5c724fac2eecf2dbb2164ec73b38e56d';
    $location = sanitize_text_field($_POST['location']);
    $url = "http://api.openweathermap.org/data/2.5/weather?q=$location&appid=$api_key";
    $response = wp_safe_remote_get($url);

    if (is_wp_error($response)) {
        echo json_encode(array('error' => 'Unable to fetch weather data.'));
    } else {
        $body = wp_remote_retrieve_body($response);
        echo $body;
    }
    die();
}
add_action('wp_ajax_get_weather_data', 'get_weather_data');
add_action('wp_ajax_nopriv_get_weather_data', 'get_weather_data');