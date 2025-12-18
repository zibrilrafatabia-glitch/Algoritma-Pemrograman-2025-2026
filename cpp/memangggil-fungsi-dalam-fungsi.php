<?php
function hitungUmur($tahun_lahir , $tahun_sekarang) {
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}
function perkenalan($nama, $salam="assalamualaikum.") {
    echo $salam . "\n";
    echo "perkenalkan nama saya " . $nama . ".\n";
    echo "umur saya adalah " . hitungUmur(2006, 2025) . " tahun.\n";
    echo "senang berkenalan denga anda.\n";
}
perkenalan("ikhsan");
?>