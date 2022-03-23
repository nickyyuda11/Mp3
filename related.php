<?php
echo '<h2 class="bmenu1" align="center">Lagu Terkait</h2>';
$grab = ngegrab('https://www.googleapis.com/youtube/v3/search?part=snippet&order=relevance&q=' . $qu . '&key=' . $devkey . '&part=snippet&maxResults=7&relatedToVideoId=' . $_GET['id'] . '&type=video');
$json = json_decode($grab);
if ($json) {
    foreach ($json->items as $hasil) {
        $id          = $hasil->id->videoId;
        $name        = $hasil->snippet->title;
        $ln          = preg_replace("/[^A-Za-z0-9[:space:]]/", "", $name);
        $ln2         = preg_replace('|[\s-]+|', '-', $ln);
        $udx          = strtolower("$ln2");
        $ud = trim($udx, '-');
        $description = $hasil->snippet->description;
        $channel     = $hasil->snippet->channelTitle;
        $channelid   = $hasil->snippet->channelId;
        $date     = dateyt($hasil->snippet->publishedAt);
        $hasil       = ngegrab('https://www.googleapis.com/youtube/v3/videos?key=' . $key . '&part=contentDetails,statistics&id=' . $id . '');
        $dt          = json_decode($hasil);
        foreach ($dt->items as $dta) {
            $time        = $dta->contentDetails->duration;
            $duration    = format_time($time);
            $views       = $dta->statistics->viewCount;
            $likes       = $dta->statistics->likeCount;
        }
        echo '<div class="list2"><table width="100%"><tbody><tr>
<td style="padding-left:5px;" valign="middle"><h3>• <a href="/' . $id . '/' . $ud . '.html" title="' . $name . ' mp3">' . $name . ' Mp3</a></h3> </td></tr></tbody></table></div>';
    }
}
echo '</div>';
