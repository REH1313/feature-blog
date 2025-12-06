<article>
  <h1><?=htmlspecialchars($post['title'])?></h1>
  <p><small><?=htmlspecialchars($post['published_at'])?></small></p>
  <div><?=nl2br(htmlspecialchars($post['body']))?></div>
</article>
