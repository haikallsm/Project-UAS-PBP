<?php

namespace App\Models;

use Database;
use PDO;

class Letter {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllByUserId($userId) {
        $stmt = $this->db->prepare("
            SELECT l.*, lt.name as letter_type_name, lt.description as letter_type_desc
            FROM letters l
            JOIN letter_types lt ON l.letter_type_id = lt.id
            WHERE l.user_id = ?
            ORDER BY l.created_at DESC
        ");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("
            SELECT l.*, lt.name as letter_type_name, u.full_name, u.email
            FROM letters l
            JOIN letter_types lt ON l.letter_type_id = lt.id
            JOIN users u ON l.user_id = u.id
            WHERE l.id = ?
        ");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $stmt = $this->db->prepare("
            INSERT INTO letters (user_id, letter_type_id, purpose, notes, status, created_at)
            VALUES (:user_id, :letter_type_id, :purpose, :notes, :status, NOW())
        ");
        return $stmt->execute($data);
    }

    public function updateStatus($id, $status) {
        $stmt = $this->db->prepare("UPDATE letters SET status = ?, updated_at = NOW() WHERE id = ?");
        return $stmt->execute([$status, $id]);
    }
}
