<?php include 'header.php';

$months = [1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Aout', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'];
$weekDays = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$selectedYear = $_GET['year'] ?? date('Y');
$selectedMonth = $_GET['month'] ?? date('n');
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);
$monthFirstDayInWeek = date('N', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));

?>

<div class="d-flex justify-content-center text-white">
    <form action="" method="get" class="col-6 mt-3 p-3 bg-dark">
        <label for="month">Mois</label>
        <select class="custom-select" name="month" id="month">
            <?php foreach ($months as $monthNumber => $month): ?>
                <option value="<?= $monthNumber ?>" <?= $selectedMonth == $monthNumber ? 'selected' : ''; ?>>
                <?= $month ?>
                </option>
            <?php endforeach;?>
        </select>
        <label class="mt-3" for="year">Année</label>
        <select class="custom-select" name="year" id="year">
            <?php for ($year = 1900; $year <= 2100; $year++): ?>
                <!-- afficher l'année sélectionnée sinon afficher l'année en cours -->
                <option value="<?= $year ?>" <?= $selectedYear == $year ? 'selected' : ''; ?>>
                    <?= $year ?>
                </option>
            <?php endfor;?>
        </select>
        <input class="mt-3 button" type="submit" value="Valider">
    </form>
</div>

<div class="d-flex justify-content-center mt-5">
<table>
    <thead>
        <tr class="border bg-dark text-white font-weight-bold">
            <?php foreach ($weekDays as $weekDay): ?>
                <td class="border p-3"><?= $weekDay ?></td>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <tr class="border p-2">
            <?php $day = 1;
            for ($square = 1; $square <= $daysInMonth + $monthFirstDayInWeek - 1; $square++):
            if ($square < $monthFirstDayInWeek) { ?>
                <td class="bg-light"></td>
            <?php } else { ?>
                <td class="border p-2 text-center bg-light"><?= $day ?></td>
            <?php $day++;
            } ?>
            <!-- ferme le tr et en ouvre un nouveau si on est dimanche -->
            <?php if ($square % 7 == 0) { ?>
                </tr><tr>
            <?php }
            endfor; ?>
        </tr>
    </tbody>
</table>
</div>

<!-- boucle js pour année
<script>
    let form = document.querySelector('form');
    let button = document.querySelector('button');
    let select = document.createElement('select');
    select.className = "custom-select select2 mt-3";
    select.name = "years";
    select.id = "years";
    button.insertAdjacentElement("beforebegin", select);

    for (i = 1920; i <= 2050; i++) {
        console.log(i);
        let option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        select.appendChild(option);
    }
</script>
<script type="text/javascript">
    document.getElementById('months').value = "<?= $_GET['months'] ?>";
    document.getElementById('years').value = "<?= $_GET['years'] ?>";
</script>
-->

<?php include 'footer.php' ?>