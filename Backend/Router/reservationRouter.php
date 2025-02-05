<?php
include_once __DIR__ . '/../Controller/reservationController.php';

$acao = $_GET['acao'] ?? '';

$reservationController = new reservationController();

switch ($acao) {
    case 'reservar':
        $id_espaco = $_GET['id_espaco'] ?? null;
        $data = $_GET['data'] ?? null;
        if ($id_espaco && $data) {
            $result = $reservationController->makeReservation($id_espaco, $data);
            echo json_encode(['success' => $result]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Dados incompletos.']);
        }
        break;

    case 'carregar':
        $id_espaco = $_GET['id_espaco'] ?? null;
        if ($id_espaco) {
            $dates = $reservationController->loadCalendar($id_espaco);
            echo json_encode(['dates' => $dates]);
        } else {
            echo json_encode(['dates' => []]);
        }
        break;

    default:
        echo json_encode(['success' => false, 'message' => 'Ação inválida.']);
        break;
}
?>
