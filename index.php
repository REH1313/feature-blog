<?php
require __DIR__."/config/init.php";
$controller = new PostController($db,$auth);
$controller->index();
