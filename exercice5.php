<?php include 'header.php'; 
$dateToday = "today";
$dateEnd = "2016/05/16";
$daysBetween = (strtotime($dateToday) - strtotime($dateEnd));
?>

<p class="text-center mt-3">Il y a <?= number_format($daysBetween/86400) ?> jours qui nous sépare du 16 mai 2016.</p>

<?php include 'footer.php' ?>