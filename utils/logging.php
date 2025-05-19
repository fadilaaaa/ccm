<?php
function logError($message)
{
    $logFile = __DIR__ . '/../logs/error.log';
    $timestamp = date('Y-m-d H:i:s');
    $formattedMessage = "[$timestamp] ERROR: $message" . PHP_EOL;
    file_put_contents($logFile, $formattedMessage, FILE_APPEND);
}
