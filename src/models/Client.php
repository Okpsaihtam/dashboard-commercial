<?php
require_once __DIR__ . '/../config/database.php';
class Client {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM client");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}