<?php include 'header.php'; 
$date = date('d/m/Y', strtotime('+ 20 days'));
?>

<p class="text-center mt-3"><?= $date ?></p>

<?php include 'footer.php' ?>