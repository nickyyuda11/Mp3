<?php

error_reporting(0);
$site = 'http://mp3file.club';
$apiclient = array('GANTI_DENGAN_APIKEY_YOUTUBE_ANDA');
$ngacak = array_rand($apiclient);
$idsusukan = $apiclient[$ngacak];
$clientid = '' . $idsusukan . '';


function ngegrab($url)
{
    ini_set("user_agent", "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2 19.42.55/19.892; U; en) Presto/2.5.25");
    $grab = @fopen($url, 'r');
    $contents = "";
    if ($grab) {
        while (!feof($grab)) {
            $contents .= fread($grab, 8192);
        }
        fclose($grab);
    }
    return $contents;
}

function format_size($size)
{
    $filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
    return $size ? round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i] : '0 Bytes';
}
function querydecode($q)
{
    $q = preg_replace("/[^A-Za-z0-9[:space:]]/", "$1", strip_tags(ucwords(strtolower($q))));
    $q = str_replace(' ', '-', $q);
    return $q;
}
function queryencode($q)
{
    $q = str_replace('-', ' ', strip_tags($q));
    $q = ucwords($q);
    return $q;
}
function getlinkdl($id)
{
    $grab = json_decode(ngegrab('http://api.soundcloud.com/tracks/' . $id . '/streams?client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea'));
    $link = $grab->http_mp3_128_url;
    return $link;
}
function getfilesize($url)
{
    $data = get_headers($url, true);
    if (isset($data['Content-Length']))
        return (int)$data['Content-Length'];
}

function potong($content, $start, $end)
{
    if ($content && $start && $end) {
        $r = explode($start, $content);
        if (isset($r[1])) {
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return '';
    }
}

function format_time($t, $f = ':')
{
    if ($t < 3600) {
        return sprintf("%02d%s%02d", floor($t / 60) % 60, $f, $t % 60);
    } else {
        return sprintf("%02d%s%02d%s%02d", floor($t / 3600), $f, ($t / 60) % 60, $f, $t % 60);
    }
}
function clearspace($q)
{
    $qu = str_replace(" ", "+", $q);
    $qu = str_replace("-", "+", $qu);
    $qu = str_replace("_", "+", $qu);
    return $qu;
}
$liad = array('ReaL RapE VideO');
$linad = array_rand($liad);
$textsex = $liad[$linad];
