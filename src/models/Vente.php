<?php
require_once __DIR__ . '/../config/database.php';
class Vente {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT vente.*, client.nom FROM vente JOIN client ON vente.client_id = client.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}