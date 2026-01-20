<?php
date_default_timezone_set("Asia/Jakarta"); // Atur zona waktu ke Indonesia

$jam = date("H");
$nama = readline("Masukkan nama Anda: ");

if ($jam >= 5 && $jam < 12) {
    $salam = "Selamat Pagi";
} elseif ($jam >= 12 && $jam < 15) {
    $salam = "Selamat Siang";
} elseif ($jam >= 15 && $jam < 18) {
    $salam = "Selamat Sore";
} else {
    $salam = "Selamat Malam";
}

echo "$salam, $nama!\n";
echo "Semoga harimu menyenangkan!\n";
?>
