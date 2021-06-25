<form action="calendrier.php" method="POST">
    <select name="month" id="month"class="btn-grad" >
        <?php foreach ($month as $key => $MonthLetter) { ?>
            <option value="<?= $key ?>"> <?= $MonthLetter ?></option>
        <?php } ?>
    </select>

    <select name="year" id="year" class="btn-grad">
        <?php for ($i = $minYear; $i <= $maxYear; $i++) { ?>
            <option><?= $i ?></option>
        <?php } ?>
    </select>
    <input class="btn-grad" type="submit" value="submit" name="submit">
</form>