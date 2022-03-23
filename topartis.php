<?php
function elek($url)
{
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$title = 'Top Artist';
$discription = 'Top Artist - Mp3Kw.Net Dapat anda download gratis di sini Dan Dapatkan Lagu Favorit Kamu Disini Tanpa Ribet!';
$keywords = 'download official-video mp3, download lagu , gratis, mp3 gratis, 3gp official-video , download full album official-video';
include 'tm-inc/head.php';
include 'lastmp3.php';
include 'tm-inc/foot.php';
