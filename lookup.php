<?php
$zip = $_GET['zip'] ?? '';

// Sample zip database
$zipData = [
    "81411" => ["city" => "Bedrock", "state" => "Colorado"],
    "90210" => ["city" => "Beverly Hills", "state" => "California"],
    "10001" => ["city" => "New York", "state" => "New York"],
    // Add more zip mappings as needed
];

if (array_key_exists($zip, $zipData)) {
    echo json_encode($zipData[$zip]);
} else {
    echo json_encode(["city" => "", "state" => ""]);
}
?>
