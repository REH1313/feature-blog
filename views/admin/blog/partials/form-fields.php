<label>Title <input type="text" name="title" value="<?=htmlspecialchars($post['title']??'')?>"></label>
<label>Slug <input type="text" name="slug" value="<?=htmlspecialchars($post['slug']??'')?>"></label>
<label>Status 
  <select name="status">
    <option value="draft">Draft</option>
    <option value="published">Published</option>
  </select>
</label>
<label>Body <textarea name="body"><?=htmlspecialchars($post['body']??'')?></textarea></label>
