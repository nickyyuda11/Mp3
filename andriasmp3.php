<?php
$id = $_GET['id'];
include 'vf.php';
$tubes = maz('https://www.youtube.com/watch?v=' . $id . '');
$name = potong($tubes, 'dir="ltr" title="', '">');
$name = str_replace('(', '', $name);
$name = str_replace(')', '', $name);
$name = str_replace('[', '', $name);
$name = str_replace(']', '', $name);
$name = str_replace('&', '', $name);
$name = str_replace('"', '', $name);
$name = str_replace('.', '', $name);
$name = str_replace(",", "", $name);
$name = str_replace('*', '', $name);
$name = str_replace('#', '', $name);
$name = str_replace('!', '', $name);
$name = str_replace('@', '', $name);
$name = str_replace('?', '', $name);
$name = str_replace('/', '', $name);
$name = str_replace('|', '', $name);
$name = str_replace('%', '', $name);
$name = str_replace(';', '', $name);
$name = str_replace('amp;', '', $name);
?>
<iframe style="width:230px;height:60px;border:0;overflow:hidden;" scrolling="no" src="//www.youtubeinmp3.com/widget/button/?video=https://www.youtube.com/watch?v=<?php echo $id; ?>&title=[Mp3Kw.Net]-<?php echo $name; ?>" &color=c91818>