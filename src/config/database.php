<?php
class Database {
    private static $host = 'mysql';
    private static $db_name = 'dashboard_db';
    private static $username = 'user';
    private static $password = 'password';
    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion: " . $e->getMessage());
        }
    }
}