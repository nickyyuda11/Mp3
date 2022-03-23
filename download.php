<?php
include 'tm-inc/vfunc.php';

$q = $_GET['q'];
$cd          = preg_replace("/[^A-Za-z0-9[:space:]]/", "$1", $q);
$cd          = str_replace('', '', $cd);
$remove = "-";
$masbro = str_replace($remove, " ", ucwords($_GET['q']));
$tit = '' . ucwords($q) . '';
$tit = str_replace(' ', ' ', $tit);
$yf = ngegrab('https://www.googleapis.com/youtube/v3/videos?key=' . $devkey . '&part=snippet,contentDetails,statistics,topicDetails&id=' . $_GET['id'] . '');
$yf = json_decode($yf);
if ($yf) {
    foreach ($yf->items as $item) {
        $name = $item->snippet->title;
        $deo = nl2br($item->snippet->description);
        $des = $item->snippet->description;
        $date = dateyt($item->snippet->publishedAt);
        $channelId = $item->snippet->channelId;
        $chtitle = $item->snippet->channelTitle;
        $ctd = $item->contentDetails;
        $duration = format_time($ctd->duration);
        $hd = $ctd->definition;
        $udx          = strtolower("$ln2");
        $ud = trim($udx, '-');
        $st = $item->statistics;
        $views = $st->viewCount;
        $likes = $st->likeCount;
        $dislikes = $st->dislikeCount;
        $favoriteCount = $st->favoriteCount;
        $commentCount = $st->commentCount;
        $id = $_GET['id'];
        $sizer = $duration;
        $sizer = str_replace(':', '.', $sizer);
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $link = "http://$_SERVER[HTTP_HOST]"; {
            $title = '(Download ' . $sizer . ' MB) Lagu ' . $name . ' MP3 | GRAMSTER.INFO';
            $discription = 'Download Lagu ' . $name . ' MP3 Baru Secara gratis dan album ' . $name . '';
            $keywords = 'download mp3 ' . $name . ' gratis,' . $name . ' mp3 gratis,' . $name . ' download video,mp4 ' . $name . ' video gratis, video ' . $name . ' gratis, 3gp ' . $name . ' gratis,' . $name . ' download full album';
            $keywords2 = 'download mp3 gratis, mp3 gratis, download video, mp4 video gratis, mp3/mp4 lagu video gratis, 3gp gratis, download full album';
        }
        include 'tm-inc/head2.php';
        if ($_GET['q']) {
            $q = $_GET['q'];
        } else {
            $a = array('Sonata', 'Nagaswara', 'Remix 2018');
            $b = count($a) - 1;
            $q = $a[rand(0, $b)];
        }
        $qu = $q;
        $qu = str_replace(" ", "+", $qu);
        $qu = str_replace("-", "+", $qu);
        $qu = str_replace("_", "+", $qu);
        if (strlen($_GET['page']) > 1) {
            $yesPage = $_GET['page'];
        } else {
            $yesPage = '';
        }
        echo ' <meta content="https://i.ytimg.com/vi/' . $id . '/hqdefault.jpg" property="og:image"/>
</head>
<body>

<div><div class="head" align="left"><p align="left"><a href="/" title="Gudang Download Lagu Mp3 2018"></a></p><h1><a href="/" title="MP3FILE - Gudang Download Lagu Mp3 2018"><span style="text-shadow:gray 0.1em 0.1em 0.1em"><font color="#FFF" size="4">
<h1>MP3FILE - Gudangnya MP3KW 2018</h1></font></span></a></h1></font></span></a></h1><p></p><font color="white"><h2>Gudangnya MP3KW 2018</h2> </font></div></div>

<div align="center" <div="" class="list3">
<a name="top"></a><table class="" width="100%" align="center"><tbody><tr>
<td class="codex" width="50%" align="center"> <a style="color: #111;" href="/"><b>HOME </b></a> </td>
<td class="codex" width="50%" align="center"> <a style="color: #111;" href="/billboard/"><b>BILLBOARD</b></a></td>
</td></tr></tbody></table></div>
<div>
<div class="list3">
<center>
<form action="/search.php/" method="get"><input name="q" value="" type="text" width="100%"> <input value="Search" type="submit"> <br>

</form></center>
</div>

<div class="bmenu1" align="center"><h3>' . $name . ' Mp3 Information</h3></div>
<div class="list3">
<div class="red2">Download Lagu dari <b>' . $name . '</b> Mp3 Gratis.  <b>Download Lagu ' . $name . '.mp3</b> gratis hanya untuk review saja, Belilah <u>Kaset asli atau CD original</u> dan unduh lagu aslinya di Itunes atau gunakan <u>NSP/I-RING/RBT</u> agar Musisi kesayangan anda dapat terus berkarya di Belantika Musik Dunia</div>

<table align="left"><tbody><tr valign="top"><td><h1><b>Download ' . $name . '.mp3</b></h1></td></tr></tbody></table><br><br>

<table align="center"><tbody><tr valign="top"><td>

<p align="center" style="text-decoration: none; background: rgb(248, 248, 248) none repeat scroll 0% 0%; border: 1px solid rgb(127, 26, 42); padding: 2px; color: rgb(0, 0, 0);">Play Video/Mp4</p>

<iframe width="auto" height="200" src="https://www.youtube.com/embed/' . $id . '" frameborder="0" allow="autoplay" encrypted-media" allowfullscreen></iframe>

<center>
<p style="text-decoration: none; background: rgb(248, 248, 248) none repeat scroll 0% 0%; border: 1px solid rgb(127, 26, 42); padding: 2px; color: rgb(0, 0, 0);">Play Audio/Mp3</p>
<audio controls="controls" width="auto"><source src="https://videotube.gdn/vs.php?vv=' . $id . '&quality=144" allow="autoplay" type="video/mp4"></audio>
<br>

</td></tr></tbody></table>
</center>
<table class="otable" style="width:100%"><tbody>
<h2><tr valign="top"><td width="30%">Title</td><td> : </td><td>' . $name . '</td></tr></h2>
<h2><tr valign="top"><td width="30%">Size</td><td> : </td><td>' . $sizer . ' MB</td></tr></h2>
<h2><tr valign="top"><td width="30%">Hits</td><td> : </td><td>' . $likes . ' X</td></tr></h2>
<h2><tr valign="top"><td width="30%">View</td><td> : </td><td>' . $views . ' Views</td></tr></h2>
<h2><tr valign="top"><td width="30%">Durations</td><td> : </td><td>' . $duration . ' Minutes </td></tr></h2>
<h2><tr valign="top"><td width="30%">Type Of File</td><td> : </td><td>Audio MP3 (.mp3) & Video MP4 (.mp4) </td></tr></h2>
<h2><tr valign="top"><td width="30%">Source</td><td> : </td><td><a href="http://www.youtube.com/watch?v=' . $id . '" rel="nofollow">Youtube.com/watch?v=' . $id . '</a></td></tr></h2>

</tbody></table>
<br>
<center>
<a href="http://adserver.adreactor.com/servlet/view/window/url/zone?zid=40&pid=6497" style="text-decoration: none; background: rgb(248, 248, 248) none repeat scroll 0% 0%; border: 1px solid rgb(127, 26, 42); padding: 2px; color: rgb(0, 0, 0);" rel="nofollow">
<strong>FAST DOWNLOAD</strong></a>
<br><br>
<p>Download Menggunakan <b>Fast Download</b> Lebih Cepat Dan Rekomendasi Dari Admin.</p>
<p><b><font color="red">Note </b></font>: Semua File Yang Tersimpan Di Situs Ini Semua Diambil Dari <font color="red">Youtube.com</font> Dan Kami Tidak Menyimpan File Music & Video Di Dalam Server Kami.</p>
<br>

<h4>TAGS : 
<a href="/downloads/' . $ud . '-' . $name . '" title="Download Mp3 ' . $name . '" rel="dofollow"> Download Mp3 ' . $name . '</a> | 
<a href="/downloads/MP3' . $ud . '-' . $name . '-Gratis" title="Mp3 ' . $name . ' Gratis" rel="dofollow">MP3 ' . $name . ' Gratis</a> | 
<a href="/downloads/Mp3-Gratis' . $ud . '-' . $name . '" title="Mp3 Gratis ' . $name . '" rel="dofollow">Mp3 Gratis ' . $name . '</a> | 
<a href="/downloads/Video' . $ud . '-' . $name . '-MP4" title="Download Video' . $name . ' MP4" rel="dofollow">Download Video ' . $name . ' MP4</a> | 
<a href="/downloads/Video-Gratis' . $ud . '-' . $name . '" title="Video Gratis' . $name . '" rel="dofollow">Video Gratis ' . $name . '</a> | 
<a href="/downloads/Video' . $ud . '-' . $name . '-MP4" title="Video ' . $name . ' MP4" rel="dofollow">Video ' . $name . ' MP4</a> | 
<a href="/downloads/3gp-Gratis' . $ud . '-' . $name . '" title="3gp Gratis ' . $name . '" rel="dofollow">3gp Gratis ' . $name . '</a> | 
<a href="/downloads/Full-Album' . $ud . '-' . $name . '" title="Download Full Album ' . $name . '" rel="dofollow">Download Full Album ' . $name . '</a> </h4>
<br>

<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_33">
<script>
_avp.push({ tagid: "avp_zid_33", alias: "/", type: "banner", zid: 33, pid: 6497 });
</script>
</div>
<!-- END ADREACTOR CODE -->

<a href="/safelinkmp3/' . $id . '/" rel="nofollow"> <h3><b class="red2">Download MP3</b></a> -  
<a href="/safelinkmp4/' . $id . '/" rel="nofollow"> <b class="red2">Download MP4</b></a></h3> <br>

</div>
</center>
<div class="list2" align="center">
Share : 
<a href="http://www.facebook.com/sharer.php?u=' . $actual_link . '" target="_blank" rel="nofollow">Facebook</a> | 
<a href="https://twitter.com/intent/tweet?text=Video  +' . $actual_link . '" target="_blank" rel="nofollow">Twitter</a> | 
<a href="https://plus.google.com/share?url=' . $actual_link . '" target="_blank" rel="nofollow">Google+</a> | 
<a href="whatsapp://send?text=Lihat ini ' . $name . ': ' . $actual_link . '" target="_blank" rel="nofollow">Whatsapp</a>
</div>
</div>';
    }
} else {
    echo '<div class="anuin">
<P><b><center> Ups ... Erorr !! <br />
Silakan Reload Halaman Ini </center></b>
</p>';
}
include 'related.php';
echo '</div></div>';
include 'tm-inc/foot.php';
$haystack = explode("\n", file_get_contents("map.txt"));
$text = 'http://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI'] . '';
$file = fopen("map.txt", "a");
if ($file && !in_array($text, $haystack)) {
    fputs($file, "\n" . $text);
}
fclose($file);
