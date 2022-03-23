<?php
header("Content-Type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>
	<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';
$dat='map.txt';
$date = ''.date("Y-m-d").'';
$txt_file    = file_get_contents($dat);
$rows        = explode("\n", $txt_file);
array_shift($rows);
foreach($rows as $row)
{
echo '
<url>
<loc>'.$row.'</loc>
<lastmod>'.$date.'</lastmod>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>';
}
echo'</urlset>';
?>