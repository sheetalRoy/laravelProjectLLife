<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($urls as $url)
        <url>
            <loc>{{ URL::to($url) }}</loc>
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
</urlset>
