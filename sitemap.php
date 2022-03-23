<?php
header("Content-Type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<sitemap>
<loc>https://dddbbb.co/map.txt</loc>
<lastmod>' . date("Y-m-d") . '</lastmod>
<changefreq>hourly</changefreq>
<priority>1.0</priority>
</sitemap>
</sitemapindex>';
