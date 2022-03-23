<?php
function maz($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $header[] = "Accept-Language: en";
    $header[] = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3";
    $header[] = "Pragma: no-cache";
    $header[] = "Cache-Control: no-cache";
    $header[] = "Accept-Encoding: gzip,deflate";
    $header[] = "Content-Encoding: gzip";
    $header[] = "Content-Encoding: deflate";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $load = curl_exec($ch);
    curl_close($ch);
    return $load;
}
function ady($url)
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
function write_to_file($q)
{
    $filename = 'sitemap.dat';
    $fh = fopen($filename, "a");
    if (flock($fh, LOCK_EX)) {
        fwrite($fh, $q);
        flock($fh, LOCK_UN);
    }
    fclose($fh);
}
function dateyt($date)
{
    $date = substr($date, 0, 10);
    $date = explode('-', $date);
    $mn = date('F', mktime(0, 0, 0, $date[1]));
    $dates = '' . $date[2] . ' ' . $mn . ' ' . $date[0] . '';
    return $dates;
}
function hapus($txt)
{
    $txt = preg_replace("/[^a-zA-Z0-9_\-]/", "-", trim($txt));
    return $txt;
}
function name($txt)
{
    $txt = preg_replace("![^a-z0-9]+!i", " ", $txt);
    $txt = ucwords($txt);
    return $txt;
}
function trans($txt)
{
    $zacky = ady('https://translate.google.com/m?hl=id&sl=auto&tl=id&ie=UTF-8&prev=_m&q=' . str_replace(' ', '+', $txt));
    $tkr = explode('class="t0">', $zacky);
    $tkr1 = explode('</', $tkr[1]);
    $ahmad = $tkr1[0];
    return $ahmad;
}
function ubah($gemblong)
{
    $gemblong = str_replace('01', 'Januari', $gemblong);
    $gemblong = str_replace('02', 'Februari', $gemblong);
    $gemblong = str_replace('03', 'Maret', $gemblong);
    $gemblong = str_replace('04', 'April', $gemblong);
    $gemblong = str_replace('05', 'Mei', $gemblong);
    $gemblong = str_replace('06', 'Juni', $gemblong);
    $gemblong = str_replace('07', 'Juli', $gemblong);
    $gemblong = str_replace('08', 'Agustus', $gemblong);
    $gemblong = str_replace('09', 'September', $gemblong);
    $gemblong = str_replace('10', 'Oktober', $gemblong);
    $gemblong = str_replace('11', 'November', $gemblong);
    $gemblong = str_replace('12', 'Desember', $gemblong);
    return $gemblong;
}
function covtime($youtube_time)
{
    $start = new DateTime('@0'); // Unix epoch
    $start->add(new DateInterval($youtube_time));
    return $start->format('i:s');
}
$mashenkey = 'AIzaSyAWx9MkZGhLSsPMYSRlRJxFBTNeItHQLYw';
