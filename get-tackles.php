<?php

// Your data retrieval logic here, for example, fetching total tackles data from a database
// Replace 'your_database_credentials' with your actual database connection details
$mysqli = new mysqli('');
$query = "SELECT player_name, total_tackles FROM ou_football_players";
$result = $mysqli->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array('name' => $row['player_name'], 'y' => (float)$row['total_tackles']);
}

// Convert the data to JSON and send it to the client
echo json_encode($data);

// Close the database connection
$mysqli->close();

?>
