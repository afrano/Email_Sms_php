<?php

$userkey = 'o7z12n';
$passkey = 'mensdario';
$notujuan = '0101011';
$isipesan = 'hallo bro';

$kirim = KirimSMS($notujuan, $pesan, $userkey, $passkey);

function KirimSMS($notujuan, $isipesan, $userkey, $passkey) {
    $isi = urlencode($isipesan);
    $hp = str_replace('+62', '0', $notujuan);
    $hp = str_replace(' ', '', $hp);
    $hp = str_replace('.', '', $hp);
    $hp = str_replace(',', '', $hp);
    $ho = trim($hp);
    $url = "https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$hp&pesan=$isi";
    $data = file_get_contents($url);
    if (eregi('success', $data)) {
        $hasil = '1';
    } else {
        $hasil = '0';
    }
    return $hasil;
}
