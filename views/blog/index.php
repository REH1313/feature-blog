<h1>Blog</h1>
<ul>
<?php foreach($posts as $p): ?>
  <li><a href="/blog/<?=htmlspecialchars($p['slug'])?>"><?=htmlspecialchars($p['title'])?></a></li>
<?php endforeach; ?>
</ul>
