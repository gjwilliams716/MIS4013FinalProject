<?php

// Original function to select players from the database
function selectOudtbl() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT rk, player, g, solo, ast, tot, loss, sk, inte, fr, ff FROM `oudtbl`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to add a new player to the database
function addPlayer($player, $g, $solo, $ast, $tot, $loss, $sk, $inte, $fr, $ff) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `oudtbl` (player, g, solo, ast, tot, loss, sk, inte, fr, ff) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siiiddiiii", $player, $g, $solo, $ast, $tot, $loss, $sk, $inte, $fr, $ff);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to edit an existing player in the database
function editPlayer($rk, $player, $g, $solo, $ast, $tot, $loss, $sk, $inte, $fr, $ff) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `oudtbl` SET g=?, solo=?, ast=?, tot=?, loss=?, sk=?, inte=?, fr=?, ff=? WHERE rk=?");
        $stmt->bind_param("siiiddiiii", $player, $g, $solo, $ast, $tot, $loss, $sk, $inte, $fr, $ff);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

// Function to delete a player from the database
function deletePlayer($rk) {
    try {
        $conn = get_db_connection();
        
        // Adjust the DELETE query based on your database schema
        $stmt = $conn->prepare("DELETE FROM oudtbl WHERE rk = ?");
        $stmt->bind_param("s", $rk);

        if ($stmt->execute()) {
            // Deletion successful
            $stmt->close();
            $conn->close();
            return true;
        } else {
            // Error during deletion
            $stmt->close();
            $conn->close();
            return false;
        }
    } catch (Exception $e) {
        // Exception handling if something goes wrong
        $conn->close();
        return false;
    }
}

