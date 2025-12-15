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
