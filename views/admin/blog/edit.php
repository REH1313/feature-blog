<h1>Edit Post</h1>
<form method="post" action="/admin/blog/<?=$post['id']?>/update">
  <?php include __DIR__."/partials/form-fields.php"; ?>
  <button type="submit">Save</button>
</form>
