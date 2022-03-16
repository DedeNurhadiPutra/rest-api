<?php

$mahasiswa = [
    [
        "nama"  => "Dede Nurhadi Putra",
        "nim"   => "101151186",
        "email" => "denurhadi4@gmail.com"
    ],
    [
        "nama"  => "Kimod",
        "nim"   => "101151169",
        "email" => "kimodian4@gmail.com"
    ]
];

$dbh = new PDO('mysql:host=localhost;dbname=perpustakaan', 'root', '');
$db  = $dbh->prepare('SELECT * FROM books');
$db->execute();
$books  = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($books);
echo $data;
