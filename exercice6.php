<?php include 'header.php'; 
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>

<p class="text-center mt-3">Il y avait <?= $number ?> jours en Février 2016.</p>

<?php include 'footer.php' ?>