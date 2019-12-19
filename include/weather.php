<?php
require_once('include/config.php');

function get_weather(){

    error_reporting(0);

    global $weather_api_key;

    // get user ip address
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $ip = '116.73.235.148';//$_SERVER['REMOTE_ADDR'];

    // get lat and long of the user
    $latlong = explode(",", file_get_contents('https://ipapi.co/'.$ip.'/latlong'));
    $city = file_get_contents('https://ipapi.co/'.$ip.'/city');
    // get user weather conditions
    $weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?lat='
    . $latlong[0] . '&lon=' . $latlong[1] . '&appid='. $weather_api_key);

    $json = json_decode($weather);

    $description = $json->weather[0]->description;
    $climate = $json->weather[0]->main;
    $temperature = $json->main->temp;
    $city;

    date_default_timezone_set('Asia/Kolkata');
    $hour = date('H');//current hour in 24hour clock

    //open weather api icons.
    switch ($climate) {
        case 'Clear':
                if($hour < 18 && $hour > 6)
                    $icon = "01d";    //d for day
                else
                    $icon = "01n";    //n for night
                break;
        case 'Clouds':
        case 'Smoke':
        case 'Haze':
                if($hour < 18 && $hour > 6)
                    $icon = "02d";
                else
                    $icon = "02n";
                break;
        case 'Drizzle':
                if($hour < 18 && $hour > 6)
                    $icon = "09d";
                else
                    $icon = "09n";
                break;
        case 'Rain':
                if($hour < 18 && $hour > 6)
                    $icon = "10d";
                else
                    $icon = "10n";
                break;
        case 'Thunderstorm':
                if($hour < 18 && $hour > 6)
                    $icon = "11d";
                else
                    $icon = "11n";
                break;
        case 'Snow':
                if($hour < 18 && $hour > 6)
                    $icon = "13d";
                else
                    $icon = "13n";
                break;
        default:
                $icon = "50d";
                break;
    }

    //capitalize first letter
    $description = ucfirst($description);
    // Convert K to degree celcius
    $temperature = $temperature - 273.15;

    if($city and $description and $temperature)
    {   echo
        "<div class='weather'>
            <h6> {$city} </h6>
            <hr>
            <span class='climate'> {$description} </span>
            <img src = 'https://openweathermap.org/img/wn/{$icon}@2x.png' >
            <br>
            <span class='temperature text-muted'>Temperature : {$temperature}°C </span>
        </div>";
    }
}

 ?>