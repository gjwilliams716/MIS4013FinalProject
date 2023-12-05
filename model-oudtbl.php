<?php
function selectOudtbl() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT rk, player, g, solo, ast, tot, loss, sk, inte, fr, ff FROM `oudtbl`");
        $stmt->bind_param("s", $uEmail);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
