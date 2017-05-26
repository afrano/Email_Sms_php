<?php
$Tujuan = "tejo@gmail.com";
KirimEmail($Tujuan);

function KirimEmail($email) {
    require_once "Mail.php";
    $kepada = "$email";
    $subject = "Respon Laporan Kerusakan Jalan";
    $dari = "darisaya@bla";
    $host = "ssl://smtp.gmail.com";
    $port = "465";
    $username = "darisaya@bla";
    $password = "passwordsaya";
    $headers = array('From' => $dari, 'To' => $kepada,
        'Subject' => $subject);
    $smtp = Mail::factory('smtp', array('host' => $host,
                'port' => $port, 'auth' => true,
                'username' => $username, 'password' => $password));
    $IsiEmail = "Dear " . $kepada . " "
            . "Terima kasih anda telah berpartisipasi dalam melaporkan kerusakan jalan di Kab Sleman. Laporan anda sudah kami proses dan akan segera dikerjakan.";
    $mail = $smtp->send($kepada, $headers, $IsiEmail);
}
