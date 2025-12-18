
<?php
function perkenalan($nama,$salam) {
    echo $salam . "\n";
    echo "perkenalkan nama saya " . $nama . ".\n";
    echo "senang berkenalan denga anda.\n";
}
perkenalan("ikhsan","assalamualaikum.");
echo "\n";
$saya = "ikhsan";
$salam_saya = "halo semuanya!";
perkenalan($saya,$salam_saya);
?>
