<?php

// Your data retrieval logic here, for example, fetching total tackles data from a database
// Replace 'your_database_credentials' with your actual database connection details
$mysqli = new mysqli('159.89.47.44', 'admin', 'FinalProject4013', 'willmiso_finalproject');
$query = "SELECT player, tot FROM oudtbl";
$result = $mysqli->query($query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array('name' => $row['name'], 'y' => (float)$row['tot']);
}

// Convert the data to JSON and send it to the client
echo json_encode($data);

// Close the database connection
$mysqli->close();

?>
