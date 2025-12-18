
<?php

function faktorial($angka) {
    if ($angka <= 1) {
        return 1;
    } else {
        return $angka * faktorial($angka - 1);
    }
}
$nilai = 5;
echo "Faktorial dari " . $nilai . " adalah " . faktorial($nilai
) . ".\n";
?>
