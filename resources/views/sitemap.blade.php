<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   @foreach ($postie as $sitemap)
      <url>
         <loc>{{url('/ex/'.$sitemap->slug)}}</loc>
         <priority>1.0</priority>
         <lastmod>{{gmdate('Y-m-d\TH:i:s\Z',strtotime($sitemap->updated_at))}}</lastmod>
         <changefreq>daily</changefreq>
      </url>
   @endforeach
</urlset>

