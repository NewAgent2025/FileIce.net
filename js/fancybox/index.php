This action has been logged
<?php
// Get the user's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get the user's User-Agent (browser/device info)
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the current date and time
$dateTime = date('Y-m-d H:i:s');

// Prepare the log entry
$logEntry = array(
    'ip' => $ip,
    'userAgent' => $userAgent,
    'dateTime' => $dateTime
);

// File where the logs are stored
$logFile = 'logs.json';

// Check if the log file exists
if (file_exists($logFile)) {
    // Read the existing log data from the file
    $logs = json_decode(file_get_contents($logFile), true);
} else {
    // If the file does not exist, initialize an empty array
    $logs = array();
}

// Check if the IP already exists in the logs
$ipExists = false;
foreach ($logs as $log) {
    if ($log['ip'] === $ip) {
        $ipExists = true;
        break;
    }
}

// If the IP doesn't exist, add the new log entry
if (!$ipExists) {
    $logs[] = $logEntry;

    // Save the updated log data back into the file
    file_put_contents($logFile, json_encode($logs, JSON_PRETTY_PRINT));

} else {
}
?>
