<?php
class PostModel {
    private $db;
    public function __construct($db) { $this->db = $db; }

    public function allPublished() {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE status='published' ORDER BY published_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findBySlug($slug) {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE slug=:slug AND status='published'");
        $stmt->execute([':slug'=>$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO posts (title, slug, body, status, published_at, author_id)
                                    VALUES (:title,:slug,:body,:status,:published_at,:author_id)");
        $stmt->execute($data);
        return $this->db->lastInsertId();
    }

    public function update($id,$data) {
        $stmt = $this->db->prepare("UPDATE posts SET title=:title, slug=:slug, body=:body, status=:status, published_at=:published_at WHERE id=:id");
        return $stmt->execute($data+[':id'=>$id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("UPDATE posts SET status='archived' WHERE id=:id");
        return $stmt->execute([':id'=>$id]);
    }
}
