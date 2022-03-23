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
<b>Click Fast DOWNLOAD to download MP4</b>
<p style="text-align:center;font-size:14px;color:red;font-weight:bold;">&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;<br /><br /> 

<p />
<center>
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_33">
<script>
_avp.push({ tagid: "avp_zid_33", alias: "/", type: "banner", zid: 33, pid: 6497 });
</script>
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_9">
<script>
_avp.push({ tagid: "avp_zid_9", alias: "/", type: "banner", zid: 9, pid: 6497, crawler: true, align: "center", closeable: false, polite: false, spacing: 10, bgcolor: "#E0E0EB" });
</script>
</div>
<!-- END ADREACTOR CODE -->
</div>
<br>
<a href="/savemp4/' . $id . '/" rel="nofollow"> <h3><b class="red2">Download MP4</b></a> -  
<a href="http://adserver.adreactor.com/servlet/view/window/url/zone?zid=40&pid=6497/" rel="nofollow"> <b class="red2">Fast Download ' . $sizer . ' MB</b></a></h3> <br>
<p style="text-align:center;font-size:14px;color:red;font-weight:bold;">&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;</p>
<br>
<!-- BEGIN ADREACTOR CODE -->
<div id="avp_zid_32">
<script>
_avp.push({ tagid: "avp_zid_32", alias: "/", type: "banner", zid: 32, pid: 6497, lightbox: true, polite: false, autoclose: 15 });
</script>
</div>
<!-- END ADREACTOR CODE -->
</center>
</div>
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
