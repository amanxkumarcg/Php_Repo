<?php
// Simple PHP script in one file

// Function to greet a user
function greet($name) {
    return "Hello, " . htmlspecialchars($name) . "!";
}

// If a name is provided via URL (e.g., ?name=Manish), use it
$name = isset($_GET['name']) ? $_GET['name'] : "World";

// Display greeting
echo "<h1>" . greet($name) . "</h1>";

// Show current date and time
echo "<p>Current server time: " . date("Y-m-d H:i:s") . "</p>";
?>