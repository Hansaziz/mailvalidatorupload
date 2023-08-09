<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "file_upload_db";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT email, filename, uploaded_at FROM uploads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Email</th><th>Filename</th><th>Uploaded At</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["email"] . "</td><td>" . $row["filename"] . "</td><td>" . $row["uploaded_at"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
