<?php
include 'tm-inc/vfunc.php';

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
        $st = $item->statistics;
        $views = $st->viewCount;
        $likes = $st->likeCount;
        $dislikes = $st->dislikeCount;
        $favoriteCount = $st->favoriteCount;
        $commentCount = $st->commentCount;
        $id = $_GET['id'];
        $sizer = $duration;
        $sizer = str_replace(':', '.', $sizer); {
            $title = 'Download Lagu ' . $name . ' MP3 - GRAMSTER.INFO';
            $discription = 'Download Lagu ' . $name . ' MP3 Baru Secara gratis dan album ' . $name . '';
            $keywords = 'download mp3, ' . $name . ', gratis, mp3 gratis, download video, video gratis, video ' . $name . ', 3gp ' . $name . ', download full album';
        }
        include 'tm-inc/head1.php';
        echo '<div class="bmenu1" align="center"><h3>' . $name . ' Mp3 Information</h3></div>
<div class="list3">
<h3 style="text-align:center">
This song or video is for promotions only
</h3>
<p style="text-align:center">
<b>Click 2x to download MP3</b>
<p />

 <p style="text-align:center;font-size:14px;color:red;font-weight:bold;">&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;<br /><br /> 
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_9">
<script>
_avp.push({ tagid: "avp_zid_9", alias: "/", type: "banner", zid: 9, pid: 6497 });
</script>
</div>
<!-- END ADREACTOR CODE -->
<iframe class="button-api-frame" src="https://youtubemp3api.com/@api/button/mp3/' . $id . '" width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none"></iframe>
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_9">
<script>
_avp.push({ tagid: "avp_zid_9", alias: "/", type: "banner", zid: 9, pid: 6497 });
</script>
</div>
<!-- END ADREACTOR CODE -->
<!-- Optional script that automatically makes iframe content responsive. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script>
<script>iFrameResize({}, ".button-api-frame");</script>
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_32">
<script>
_avp.push({ tagid: "avp_zid_32", alias: "/", type: "banner", zid: 32, pid: 6497, lightbox: true, polite: false, autoclose: 15 });
</script>
</div>
<!-- END ADREACTOR CODE -->
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_9">
<script>
_avp.push({ tagid: "avp_zid_9", alias: "/", type: "banner", zid: 9, pid: 6497, crawler: true, align: "center", closeable: false, polite: false, spacing: 10, bgcolor: "#E0E0EB" });
</script>
</div>
<!-- END ADREACTOR CODE -->
<br>
<p style="text-align:center;font-size:14px;color:red;font-weight:bold;">&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;</p>

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
