<?php
/**
 * Created by PhpStorm.
 * User: Влад
 * Date: 17.05.2017
 * Time: 18:01
 */

namespace core\views;


class WeatherView
{
    function __construct($path)
    {
        require $path . "/templates/header.php";
        require $path . "/templates/weather.php";
        require $path . "/templates/footer.php";
    }
}