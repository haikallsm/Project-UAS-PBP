<?php

namespace App\Models;

use Database;

class LetterType {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM letter_types WHERE is_active = 1 ORDER BY name");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM letter_types WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
