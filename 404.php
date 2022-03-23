<?php
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '6HZ5V9rT96M';
}
$title = 'Maaf Link tidak ditemukan - mp3kw';
$discription = 'Link Tidak di temukan atau pindaah link';
$keywords = 'download mp3';
include 'tm-inc/head.php';
echo '<div class="bmenu1" align="center"><h3>Maaf Link Tidak di temukan</h3></div>
<div class="red2"><div style="
    font-size: 200px;
    text-align: center;
">404</div><br />
<h2 align="center">Atau klik <a href="/view/' . $id . '/next-lagu-mp3-terbaru-2017.html">disini</a></h2></div>';
include 'tm-inc/foot.php';
