<?php

namespace App\Controllers;

use App\Models\Letter;
use App\Models\LetterType;

class LetterController {
    private $letterModel;
    private $letterTypeModel;

    public function __construct() {
        $this->letterModel = new Letter();
        $this->letterTypeModel = new LetterType();
    }

    public function index() {
        $letters = $this->letterModel->getAllByUserId($_SESSION['user_id'] ?? 1);
        $title = "My Letters";
        require_once __DIR__ . '/../Views/letters/index.php';
    }

    public function create() {
        $letterTypes = $this->letterTypeModel->getAll();
        $title = "Request New Letter";
        require_once __DIR__ . '/../Views/letters/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /letters/create');
            exit;
        }

        $data = [
            'user_id' => $_SESSION['user_id'] ?? 1,
            'letter_type_id' => $_POST['letter_type_id'] ?? null,
            'purpose' => $_POST['purpose'] ?? '',
            'notes' => $_POST['notes'] ?? '',
            'status' => 'pending'
        ];

        if ($this->letterModel->create($data)) {
            $_SESSION['success'] = "Letter request submitted successfully!";
            header('Location: /letters');
        } else {
            $_SESSION['error'] = "Failed to submit letter request.";
            header('Location: /letters/create');
        }
        exit;
    }

    public function view() {
        $letterId = $_GET['id'] ?? null;
        if (!$letterId) {
            header('Location: /letters');
            exit;
        }

        $letter = $this->letterModel->getById($letterId);
        $title = "Letter Details";
        require_once __DIR__ . '/../Views/letters/view.php';
    }
}
