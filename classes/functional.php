<?php
function redirect($location)
{
    header('Location: ' . $location);
    die();
}
function pretty($array)
{
    echo '<pre>';
    print_r($array);
    echo "</pre>";
}
