<?php
include __DIR__ ."/../Models/hotels.php";

function getHotels($hotels) {
    $hotelsParking = $hotels;
    if (!empty($_GET['dataParking']) || (isset($_GET['dataParking']) && $_GET['dataParking'] == 0)) {
        $dataParking = $_GET['dataParking'];
        $hotelsParking = array_filter($hotelsParking, function ($hotel) use ($dataParking) {
            return $hotel['parking'] == $dataParking || $dataParking == "all";
        });
    } 

    if (!empty($_GET['dataStars']) || (isset($_GET['dataStars']) && $_GET['dataStars'] == 0)) {
        $dataStars = $_GET['dataStars'];
        $hotelsParking = array_filter($hotelsParking, function ($hotel) use ($dataStars) {
            if ($dataStars == "0") {
                return $hotel['vote'] < 3;
            } elseif ($dataStars == "1") {
                return $hotel['vote'] >= 3;
            } else {
                return true;
            }
        });
    }

    return $hotelsParking; 
}

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