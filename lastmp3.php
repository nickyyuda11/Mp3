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
$grabcrit =  elek('http://viloza.wapqu.com/site-3.html');
$ambil = explode('<div class="col-lg-9">', $grabcrit);
$tampil = explode('</div>', $ambil[1]);
$dampot = $tampil[0];
$dampot = str_replace('.html', '', $dampot);
$dampot = str_replace('1', '', str_replace('2', '', str_replace('3', '', str_replace('4', '', str_replace('5', '', str_replace('6', '', str_replace('7', '', str_replace('8', '', str_replace('9', '', str_replace('0', '', str_replace('.', '', $dampot)))))))))));
$dampot = str_replace('/mp/', '/search/', $dampot);
$dampot = str_replace(' mp', ' mp3', $dampot);
$dampot = str_replace('-"', '"', $dampot);
$dampot = str_replace('<a href="', '<a style="color: #bec2c9;" href="', $dampot);
$dampot = str_replace('

 



 ', '', $dampot);
echo '<div class="bmenu1" align="center"><h3>List Category Mp3</h3></div>
<div class="list5" align="center">';
echo $dampot;
echo '</div>';
