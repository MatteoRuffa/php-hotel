<?php 
include __DIR__ ."/Views/header.php";
include __DIR__ ."/controllers/hotels.php";

// if (!empty($_GET['dataParking']) || (isset($_GET['dataParking']) && $_GET['dataParking'] == 0)) {
//     $dataParking = $_GET['dataParking'];
//     $hotelsParking = array_filter($hotels, function ($hotel) use ($dataParking) {
//         return $hotel['parking'] == $dataParking || $dataParking == "all";
//     });
// } else {
//     $hotelsParking = $hotels;
// }


?>
<main class="container">
  <?php
  include __DIR__ . "/Views/tables.php";
  ?>
</main>
<?php
include __DIR__ ."/Views/footer.php";
?>