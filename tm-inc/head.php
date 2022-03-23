<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    ob_start("ob_gzhandler");
} else {
    ob_start();
}

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo '' . $title . ''; ?></title>
    <meta http-equiv="expires" content="sat, 11 april 2020 14:30:00 GMT">
    <meta forua="true" http-equiv="Cache-Control" content="max-age=0" />
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?php echo '' . $discription . ''; ?> PlanetLagu mp3 100% gratis" />
    <meta name="keywords" content="Download Mp3 ,Download Lagu , Download Musik , mp3kw, stafaband, muvimov, uyeshare mp3" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="id" />
    <meta name="googlebot" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="<?php echo '' . $title . ''; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="https://gramster.info/" />
    <meta property="og:description" content="<?php echo '' . $discription . ''; ?>" />
    <meta content="http://gramster.info/img/MP3FILE.png" property="og:image" />
    <?php include 'css.php'; ?>
</head>

<body>

    <div>
        <div class="head" align="left">
            <p align="left"><a href="/" title="Gudang Download Lagu Mp3 2018"></a></p>
            <h1><a href="/" title="MP3FILE - Gudang Download Lagu Mp3 2018"><span style="text-shadow:gray 0.1em 0.1em 0.1em">
                        <font color="#FFF" size="4">
                            <h1>MP3FILE - Gudangnya MP3KW 2018</h1>
                        </font>
                    </span></a></h1>
            </font></span></a></h1>
            <p></p>
            <font color="white">
                <h2>Gudangnya MP3KW 2018</h2>
            </font>
        </div>
    </div>

    <div align="center" <div="" class="list3">
        <a name="top"></a>
        <table class="" width="100%" align="center">
            <tbody>
                <tr>
                    <td class="codex" width="50%" align="center"> <a style="color: #111;" href="/"><b>HOME </b></a> </td>
                    <td class="codex" width="50%" align="center"> <a style="color: #111;" href="/billboard/"><b>BILLBOARD</b></a></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <div class="list3">
            <center>
                <form action="/search.php/" method="get"><input name="q" value="" type="text" width="100%"> <input value="Search" type="submit"> <br>

                </form>
            </center>
        </div>