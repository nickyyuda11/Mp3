<?php
if($_GET['page']) {
$page = $_GET['page'];
$maxpage = $page*10000;
	while($page < $maxpage){
		echo '
		<url>
		<loc>'.$rows[$page].'</loc>
		<lastmod>'.$date.'</lastmod>
		<changefreq>daily</changefreq>
		<priority>0.8</priority>
		</url>';
} else {
$url = ''.$spath.'';
}

?>