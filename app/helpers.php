<?php

if (!function_exists('checkActiveRoute')) {
    function checkActiveRoute($group, $route)
    {
        if ($group === 'about') {
            $about_routes = array('en.about', 'en.people', 'en.technologies', 'ru.about', 'ru.people', 'ru.technologies');

            return in_array($route, $about_routes);
        }

        if ($group === 'service') {
            $service_routes = array('ru.service.detail', 'ru.service.index', 'en.service.detail', 'en.service.index');

            return in_array($route, $service_routes);
        }

        return false;
    }
}
