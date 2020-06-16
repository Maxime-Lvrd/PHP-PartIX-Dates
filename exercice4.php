<?php include 'header.php';
date_default_timezone_set('Europe/Paris');
$time = date('H:i'); ?>

<p class="text-center mt-3">Il est <?= $time ?></p>

<p class="text-center">Timestamp de la date du jour : <?= time() ?></p>

<!-- strtotime('now') ou '1 year ago' ou 'next friday' ou '+ 5 days' ...  -->
<p class="text-center">Timestamp du mardi 2 aout 2016 à 15h : <?= strtotime('Tuesday 2 August 2016 15 hours') ?></p>

<?php include 'footer.php' ?>

