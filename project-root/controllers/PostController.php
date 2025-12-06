<?php
class PostController {
    private $posts;
    private $auth;

    public function __construct($db,$auth) {
        $this->posts = new PostModel($db);
        $this->auth = $auth;
    }

    // Public
    public function index() {
        $posts = $this->posts->allPublished();
        require __DIR__."/../views/blog/index.php";
    }

    public function show($slug) {
        $post = $this->posts->findBySlug($slug);
        require __DIR__."/../views/blog/show.php";
    }

    // Admin
    public function createForm() { $this->requireAdmin(); require __DIR__."/../views/admin/blog/create.php"; }
    public function editForm($id) { $this->requireAdmin(); $post=$this->posts->findById($id); require __DIR__."/../views/admin/blog/edit.php"; }
    public function create() { $this->requireAdmin(); $this->posts->create($_POST); header("Location:/admin/blog"); }
    public function update($id) { $this->requireAdmin(); $this->posts->update($id,$_POST); header("Location:/admin/blog"); }
    public function delete($id) { $this->requireAdmin(); $this->posts->delete($id); header("Location:/admin/blog"); }

    private function requireAdmin() {
        if(!$this->auth->check() || $this->auth->user()['role']!=='admin') { http_response_code(403); exit; }
    }
}
