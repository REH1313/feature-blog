<?php
require __DIR__ . '/../config/init.php';
$auth->requireAdmin();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h1>Admin Dashboard</h1>
  <nav>
    <ul>
      <li><a href="users.php">Manage Users</a></li>
      <li><a href="blog.php">Manage Blog</a></li>
      <li><a href="settings.php">Settings</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </nav>
  <section>
    <h2>Welcome, <?= htmlspecialchars($auth->user()['username']) ?></h2>
    <p>Use the links above to manage your site.</p>
  </section>
</body>
</html>
