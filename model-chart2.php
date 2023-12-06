<?php
function selectChart2() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player, ff FROM `oudtbl` WHERE ff > 0");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
