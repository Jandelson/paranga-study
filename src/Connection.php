<?php


namespace ParangaAgenda

class Connection {

    public static function Conn() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=agenda', 'root', 'admmysqlgeweb');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

