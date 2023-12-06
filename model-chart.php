<?php
function selectChart() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player, sk FROM `oudtbl`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
