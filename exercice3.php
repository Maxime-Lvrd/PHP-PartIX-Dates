<?php include 'header.php';

$date = date('l d F Y'); 
setlocale(LC_ALL, 'fr_FR.UTF-8', 'fra', 'fr');
?>

<p class="text-center mt-3">La date du jour est : <?= $date ?></p>

<p class="text-center mt-3">La date du jour est : <?= strftime("%A %d %B %G", strtotime($date)) ?></p>

<?php include 'footer.php' ?>