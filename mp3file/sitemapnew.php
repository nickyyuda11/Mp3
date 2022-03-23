<?php
header("Content-Type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>
	<?xml-stylesheet type="text/xsl" href="sitemap.xsl"?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

if($_GET['page']) {
$page = $_GET['page'];
} else {
$page = 1;
}

if( $page == 1 ) :
	$dat='map.txt';
	$date = ''.date("Y-m-d").'';
	$txt_file    = file_get_contents($dat);
	$rows        = explode("\n", $txt_file);
	$maxpage = count(file($dat));
	for($i=1; $i<=100; $i++) {
		echo '
		'.$maxpage.'
		<url>
		<loc>'.$rows[$i].'</loc>
		<lastmod>'.$date.'</lastmod>
		<changefreq>daily</changefreq>
		<priority>0.8</priority>
		</url>';
	}
endif;
if( $page > 1 ) :
	$dat='map.txt';
	$date = ''.date("Y-m-d").'';
	$txt_file    = file_get_contents($dat);
	$rows        = explode("\n", $txt_file);
	$maxpage = $page*20000;
	for($i = $page*10001; $i<=$maxpage; $i++) {
			echo '
			<url>
			<loc>'.$rows[$i].'</loc>
			<lastmod>'.$date.'</lastmod>
			<changefreq>daily</changefreq>
			<priority>0.8</priority>
			</url>';
	}
endif;
echo'</urlset>';

?>