<?php
include_once __DIR__ . '/../db/database.php';

class reservationController {
    private $conn;

    public function __construct() {
        $objDb = new Database();
        $this->conn = $objDb->connect();
    }

    public function makeReservation($id_espaco, $data) {
        try {
            $sql = "INSERT INTO reservas (id_espaco, data) VALUES (:id_espaco, :data)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_espaco', $id_espaco);
            $stmt->bindParam(':data', $data);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function loadCalendar($id_espaco) {
        try {
            $sql = "SELECT data, CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END AS reserved FROM reservas WHERE id_espaco = :id_espaco GROUP BY data";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_espaco', $id_espaco);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return [];
        }
    }
}
?>
