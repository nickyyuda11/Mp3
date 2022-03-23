<?php
include 'tm-inc/vfunc.php';

$q = $_GET['q'];
$cd          = preg_replace("/[^A-Za-z0-9[:space:]]/", "$1", $q);
$cd          = str_replace('', '', $cd);
$remove = "-";
$masbro = str_replace($remove, " ", ucwords($_GET['q']));
$tit = '' . ucwords($q) . '';
$tit = str_replace('%20', ' ', $tit);

$title = 'Download Lagu ' . $masbro . ' mp3';
$discription = 'Download Lagu ' . $masbro . ' Mp3 dan full album ' . $masbro . ' Terbaru dan download secara gratis di GRAMSTER, Unduh lagu ' . $masbro . '.';
$keywords = 'download official-video mp3, download lagu , gratis, mp3 gratis, 3gp official-video , download full album official-video';
$tgl = gmdate("d M Y", time() + 3600 * 7);
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include 'tm-inc/head.php';

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
$grab = ngegrab('https://www.googleapis.com/youtube/v3/search?part=snippet&order=relevance&q=' . $qu . '&key=' . $devkey . '&maxResults=20&pageToken=' . $yesPage . '&type=video');
$json = json_decode($grab);
$nextpage = $json->nextPageToken;
$prevpage = $json->prevPageToken;
echo '<h2 class="bmenu1" align="center">Download Lagu ' . $masbro . ' mp3</h2>
<div class="list2" align="center">
Share : <a href="http://www.facebook.com/sharer.php?u=' . $actual_link . '" target="_blank" rel="nofollow">Facebook</a> | <a href="https://twitter.com/intent/tweet?text=Video  +' . $actual_link . '" target="_blank" rel="nofollow">Twitter</a> | <a href="https://plus.google.com/share?url=' . $actual_link . '" target="_blank" rel="nofollow">Google+</a> | 
<a href="whatsapp://send?text=Lihat ini ' . $name . ': ' . $actual_link . '" target="_blank" rel="nofollow">Whatsapp</a>
</div>';
if ($json) {
    foreach ($json->items as $hasil) {
        $id          = $hasil->id->videoId;
        $v          = $hasil->id->videoId;
        $name        = $hasil->snippet->title;
        $ln          = preg_replace("/[^A-Za-z0-9[:space:]]/", "", $name);
        $ln2         = preg_replace('|[\s-]+|', '-', $ln);
        $udx          = strtolower("$ln2");
        $ud = trim($udx, '-');
        $description = $hasil->snippet->description;
        $channel     = $hasil->snippet->channelTitle;
        $channelid   = $hasil->snippet->channelId;
        $date     = dateyt($hasil->snippet->publishedAt);
        $hasil       = ngegrab('https://www.googleapis.com/youtube/v3/videos?key=' . $devkey . '&part=contentDetails,statistics&id=' . $id . '');
        $dt          = json_decode($hasil);
        foreach ($dt->items as $dta) {
            $time        = $dta->contentDetails->duration;
            $duration    = format_time($time);
            $views       = $dta->statistics->viewCount;
            $likes       = $dta->statistics->likeCount;
            $sizer       = $duration;
            $sizer       = str_replace(':', '.', $sizer);
        }
        echo '<div class="list2"><table width="100%"><tbody><tr>
<td style="padding-left:5px;" valign="middle"><h3><a href="/' . $id . '/' . $ud . '.html" title="Download ' . $name . ' mp3">' . $name . ' Mp3</a></h3>

<a href="http://adserver.adreactor.com/servlet/view/window/url/zone?zid=40&pid=6497" title="Download ' . $name . ' mp3"><b class="red2"><font color="red">Fast Download</a></font></b> - 
<a href="/downloads/' . $ud . '" title="Download ' . $name . ' mp3"><b class="red2"><font color="red">Download (' . $sizer . ') MB</a></font></b></h3>
</td></tr></tbody></table></div>
';
    }
    echo '';
    if (strlen($prevpage) > 1) {
        echo '';
    }
    if (strlen($nextpage) > 1) {
        echo '';
    }
} else {
    echo '<div class="anuin"><font color="red">Result N Found, please use another keyword.</font>
</div>';
}
include 'tm-inc/foot.php';
