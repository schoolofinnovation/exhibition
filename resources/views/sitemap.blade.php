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

   @foreach ($postie as $sitemap)
      <url>
         <loc>{{url('/rating/'.$sitemap->slug)}}</loc>
         <priority>0.3</priority>
         <lastmod>{{gmdate('Y-m-d\TH:i:s\Z',strtotime($sitemap->updated_at))}}</lastmod>
         <changefreq>daily</changefreq>
      </url>
   @endforeach

   @foreach ($categoryresult as $sitemap)
      @php
         $findupdated = DB::table('expos')->where('tag', $sitemap->Category)->get();
         $findSlug = $findupdated->pluck('slug');
         $findSl = $findupdated->pluck('updated_at');
      @endphp
      
      @foreach ($findupdated as $sitemapo)
      <url>
         <loc>{{url('/exhibition/expo/'.$sitemapo->slug)}}</loc>
         <priority>0.4</priority>
         <lastmod>{{gmdate('Y-m-d\TH:i:s\Z',strtotime($sitemapo->updated_at))}}</lastmod>
         <changefreq>daily</changefreq>
      </url>
      @endforeach
   @endforeach

  
</urlset>

