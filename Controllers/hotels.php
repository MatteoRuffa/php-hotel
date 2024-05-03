<?php
include __DIR__ ."/../Models/hotels.php";

function printData($data) {
    $template = "";
    foreach ($data as $hotel) {
        $template .= "<tr><td>{$hotel['name']}</td><td>{$hotel['description']}</td><td>{$hotel['vote']}</td>
        <td>{$hotel['distance_to_center']}</td></tr>";
    }
    return $template;
}

$hotelsParking = getHotels($hotels);

$template = printData($hotelsParking);