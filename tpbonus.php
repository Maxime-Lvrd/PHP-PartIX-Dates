<?php include 'header.php' ?>

<div class="d-flex justify-content-center">
    <form class="col-6 mt-3 p-3 bg-dark">
        <select class="custom-select" name="months" id="months">
            <option value="Janvier">Janvier</option>
            <option value="Février">Février</option>
            <option value="Mars">Mars</option>
            <option value="Avril">Avril</option>
            <option value="Mai">Mai</option>
            <option value="Juin">Juin</option>
            <option value="Juillet">Juillet</option>
            <option value="Aout">Aout</option>
            <option value="Septembre">Septembre</option>
            <option value="Octobre">Octobre</option>
            <option value="Novembre">Novembre</option>
            <option value="Décembre">Décembre</option>
        </select>

        <button type="submit" class="mt-3">Envoyer</button>
    </form>
</div>

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
  document.getElementById('months').value = "<?php echo $_GET['months'];?>";
  document.getElementById('years').value = "<?php echo $_GET['years'];?>";
</script>

<?php include 'footer.php' ?>