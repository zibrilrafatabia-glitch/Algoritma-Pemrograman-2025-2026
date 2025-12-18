
<?php
function hitungUmur($tahun_lahir) {
    $tahun_sekarang = date("Y");
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
}
echo "Umur saya adalah " . hitungUmur(2006) . " tahun.\n";
$umur_saya = hitungUmur(2006);
echo "Umur saya adalah " . $umur_saya . " tahun.\n";
?>
