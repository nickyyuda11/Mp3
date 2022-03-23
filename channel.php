<?php
$grab = ngegrab('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLK-euiEs1S7sdS7V0Kbk_TLPzTlDxypJB&key=' . $devkey . '&type=video');
$json = json_decode($grab);
if ($json) {
    foreach ($json->items as $hasil) {
        $channel = $hasil->snippet->channelTitle;
    }
    echo '<div class="bmenu1" align="center"><h3>List Category Mp3</h3></div>
<div class="list5" align="center">';
}
$json = json_decode($grab);
$nextpage = $json->nextPageToken;
$prevpage = $json->prevPageToken;
if ($json) {
    foreach ($json->items as $hasil) {
        $thumb       = $hasil->brandingSettings->image->bannerExternalUrl;
        $id          = $hasil->id->videoId;
        $name        = $hasil->snippet->title;
        $name = str_replace(' (Official Lyric Video)', '', $name);
        $name = str_replace(' (Official Video)', '', $name);
        $name = str_replace(' (Official Music Video)', '', $name);
        $name = str_replace(' ( Official Music Video Clip )', '', $name);
        $name = str_replace(' ( Official Lyrics Video)', '', $name);
        $name = str_replace(' ( Official Music Video Clip )', '', $name);
        $name = str_replace(' | Video Lirik', '', $name);
        $name = str_replace(' (Lyric Video)', '', $name);
        $ln          = preg_replace("/[^A-Za-z0-9[:space:]]/", "$1", $name);
        $ln          = str_replace(' ', '-', str_replace('  ', '-', $ln));
        $ud          = strtolower("$ln");
        $description = $hasil->snippet->description;
        $channel     = $hasil->snippet->channelTitle;
        $channelid   = $hasil->snippet->channelId;
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
        echo '<a style="color: #bec2c9;" href="downloads/' . $ud . '" title="lagu ' . $name . ' mp3">' . $name . '</a> | ';
    }
}
echo '</div>';
