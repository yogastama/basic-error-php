<?php
include 'env.php';
function customLog($message)
{
    $message = '[' . date('Y-m-d H:i:s') . '] ' . $message . "\r\n";
    error_log($message, 3, 'errors/errors.txt');
}
// error log di file text
if ($_SERVER['REMOTE_ADDR'] == '::1') {
    customLog('IP LOCAL ENTER');
}
