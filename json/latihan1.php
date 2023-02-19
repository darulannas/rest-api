<?php

// $mahasiswa = [
//    [
//     "nama" => "Darul Annas",
//     "nrp" => "111680",
//     "email" => "darulannas7@gmail.com"
//    ],
//    [
//     "nama" => "Darul Annas",
//     "nrp" => "111680",
//     "email" => "darulannas7@gmail.com"
//    ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

// json_encode untuk merubah object(false) atau array(true) jadi JSON
