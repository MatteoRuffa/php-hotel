<?php 
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}
include __DIR__ ."/Views/header.php";
include __DIR__ ."/controllers/hotelsController.php";
?>
<main class="container">
  <?php
  include __DIR__ . "/Views/tables.php";
  ?>
</main>
<?php
include __DIR__ ."/Views/footer.php";
?>