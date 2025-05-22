<?php
namespace LH\Models;

require_once __DIR__.'/../Database.php';

use LH\Database;
use PDO;

class Blog {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }


    public function getAllPosts($limit, $offset) {
        $limit = (int) $limit;
        $offset = (int) $offset;

        $stmt = $this->db->prepare("SELECT * FROM blogs ORDER BY created_at DESC LIMIT $limit OFFSET $offset");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countPosts() {
        return $this->db->query("SELECT COUNT(*) FROM blogs")->fetchColumn();
    }

    public function getPostById($id) {
        $stmt = $this->db->prepare("SELECT * FROM blogs WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // public function createPost($title, $desc, $img) {
    //     $stmt = $this->db->prepare("INSERT INTO blogs (title, description, image) VALUES (?, ?, ?)");
    //     return $stmt->execute([$title, $desc, $img]);
    // }

    // public function deletePost($id) {
    //     $stmt = $this->db->prepare("DELETE FROM blogs WHERE id = ?");
    //     return $stmt->execute([$id]);
    // }
}
