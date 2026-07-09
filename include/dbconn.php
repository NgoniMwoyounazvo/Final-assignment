<?php
$conn = new mysqli("localhost", "ifs242", "ifs242",
    "watch_store");
if ($conn->connect_errno) {
    echo "<b>Failed to connect to MySQL:</b> ("
        . $conn->connect_errno . ") "
        . $conn->connect_error;
}
