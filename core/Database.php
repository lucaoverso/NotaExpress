<?php

class Database {
    private static $host = 'localhost';
    private static $dbname = 'notaexpress';
    private static $username = 'root';
    private static $password = ''; // padrão no XAMPP
    private static $conn;

    public static function conectar() {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }

        return self::$conn;
    }

    public static function desconectar() {
        self::$conn = null;
    }
}
