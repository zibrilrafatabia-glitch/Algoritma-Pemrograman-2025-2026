<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST["nilai"];

    if ($nilai >= 85)
        $huruf = "A";
    elseif ($nilai >= 70)
        $huruf = "B";
    elseif ($nilai >= 55)
        $huruf = "C";
    elseif ($nilai >= 40)
        $huruf = "D";
    else
        $huruf = "E";

    echo "<h3>INPUT NILAI : $nilai<br>HURUF MUTU : $huruf</h3>";
}
?>

<form method="post">
    <label>Masukkan Nilai: </label>
    <input type="number" name="nilai" required>
    <input type="submit" value="Cek Huruf Mutu">
</form>
