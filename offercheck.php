<?php

// Simulate a database of locked/unlocked files (Replace with real database or logic)
$files = [
    '239253' => [
        'stamp' => 'bbc39650bcef2dc72a47',
        'unlocked' => true, // Change to true to simulate an unlocked file
        'file_path' => '../FileIce/videos/fi.mp4'
    ],
];

// Get parameters from the request
$fileId = $_GET['file'] ?? null;
$stamp = $_GET['t'] ?? null;
$isSurveyCompleted = isset($_POST['survey_completed']); // Check if survey is completed
$isAjax = isset($_GET['ajax']); // Check if AJAX is being used

// Validate file ID
if (!isset($files[$fileId])) {
    http_response_code(404);
    die('Invalid file ID.');
}

// Fetch file details
$file = $files[$fileId];

// Handle the survey completion
if ($isSurveyCompleted) {
    // Simulate survey completion - Unlock the file
    $files[$fileId]['unlocked'] = true;

    // You could save this change to a real database in a real-world scenario
    // For now, we will just simulate this with an in-memory update
    echo "Survey completed! File unlocked.";
    exit;
}

// AJAX check: Polling for unlock status
if ($isAjax) {
    // Respond with "1" if unlocked, otherwise "0"
    echo $file['unlocked'] ? '1' : '0';
    exit;
}

// Non-AJAX request: Attempt to download the file
if ($stamp === $file['stamp'] && $file['unlocked']) {
    // Serve the file for download
    $filePath = $file['file_path'];
    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        die('File not found.');
    }
} else {
    // Invalid or locked
    http_response_code(403);
    die('File is locked or invalid request.');
}
?>
