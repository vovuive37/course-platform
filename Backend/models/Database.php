<?php
class Database {
    public static function connect() {
        return new PDO(
            "mysql:host=localhost;dbname=elearning;charset=utf8",
            "root",
            ""
        );
    }
}
<?php
class Database {
    private static $conn;

    public static function connect() {
        if (!self::$conn) {
            self::$conn = new PDO(
                "mysql:host=localhost;dbname=elearning;charset=utf8",
                "root",
                "",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        return self::$conn;
    }
}
