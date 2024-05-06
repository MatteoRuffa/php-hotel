<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
        [
            'name' => 'Hotel Mediterraneo',
            'description' => 'Hotel Mediterraneo Descrizione',
            'parking' => true,
            'vote' => 3,
            'distance_to_center' => 7.2
        ],
        [
            'name' => 'Hotel Dolce Vita',
            'description' => 'Hotel Dolce Vita Descrizione',
            'parking' => false,
            'vote' => 4,
            'distance_to_center' => 0.5
        ],
        [
            'name' => 'Hotel Sole',
            'description' => 'Hotel Sole Descrizione',
            'parking' => true,
            'vote' => 5,
            'distance_to_center' => 1.2
        ],
        [
            'name' => 'Hotel Luna',
            'description' => 'Hotel Luna Descrizione',
            'parking' => false,
            'vote' => 2,
            'distance_to_center' => 30
        ],
        [
            'name' => 'Hotel Stella',
            'description' => 'Hotel Stella Descrizione',
            'parking' => true,
            'vote' => 3,
            'distance_to_center' => 10
        ],
        [
            'name' => 'Hotel Venere',
            'description' => 'Hotel Venere Descrizione',
            'parking' => false,
            'vote' => 4,
            'distance_to_center' => 2.5
        ]

    ];

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