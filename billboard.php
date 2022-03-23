<?php
include 'tm-inc/vfunc.php';
if ($_GET['id']) {
    $id = 'PLFgquLnL59alQ4PrI-9tZyl0Z8Bqp-RE7';
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
$grab = ngegrab('https://www.googleapis.com/youtube/v3/search?part=snippet&order=relevance&regionCode=lk&key=' . $devkey . '&playlistId=' . $id . '&maxResults=20&pageToken=' . $yesPage . '&type=video');
$json = json_decode($grab);
if ($json) {
    foreach ($json->items as $hasil) {
        $channel = $hasil->snippet->channelTitle;
    }
    $title = 'Kumpulan Lagu Terpopuler 2018 - Gudangnya MP3KW 2018 100% Gratis Download Musik';
    $discription = 'MP3FILE.CLUB - Gudangnya MP3KW 2018 100% Gratis Download Musik';
    include 'tm-inc/head.php';
    echo '<h2 class="bmenu1" align="center">Kumpulan Lagu Terpopuler 2018</h2>';
}
$json = json_decode($grab);
$nextpage = $json->nextPageToken;
$prevpage = $json->prevPageToken;
if ($json) {
    foreach ($json->items as $hasil) {
        $thumb       = $hasil->brandingSettings->image->bannerExternalUrl;
        $id          = $hasil->id->videoId;
        $name        = $hasil->snippet->title;
        $description = $hasil->snippet->description;
        $channel     = $hasil->snippet->channelTitle;
        $channelid   = $hasil->snippet->channelId;
        $ln          = preg_replace("/[^A-Za-z0-9[:space:]]/", "$1", $name);
        $ln          = str_replace(' ', '-', str_replace('  ', '-', $ln));
        $ud          = strtolower("$ln");
        $addedon     = dateyt($hasil->snippet->publishedAt);
        $hasil       = ngegrab('https://www.googleapis.com/youtube/v3/videos?key=' . $key . '&part=contentDetails,statistics&id=' . $id . '');
        $dt          = json_decode($hasil);
        foreach ($dt->items as $dta) {
            $time        = $dta->contentDetails->duration;
            $gplus       = $dta->contentDetails->googlePlusUserId;
            $duration    = format_time($time);
            $views       = $dta->statistics->viewCount;
            $likes       = $dta->statistics->likeCount;
            $dislikes    = $dta->statistics->dislikeCount;
        }
        echo '<div class="list2"><table width="100%"><tbody><tr>
<td style="padding-left:5px;" valign="middle"><h3><a href="/' . $id . '/' . $ud . '.html" title="' . $name . ' mp3">' . $name . ' Mp3</a></h3> </td></tr></tbody></table></div>';
    }
}
echo '</div></div><div id="bottom-content">';
include 'channel.php';
include 'tm-inc/foot.php';
