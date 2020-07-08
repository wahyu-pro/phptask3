<?php

class Log{
    function log_info(){
        $log  = date("Y-m-d H:i:s")." INFO: This is an information about something.".PHP_EOL.
                date("Y-m-d H:i:s")." ERROR: We can't divide any numbers by zero.".PHP_EOL.
                date("Y-m-d H:i:s")." NOTICE: Someone loves your status.".PHP_EOL.
                date("Y-m-d H:i:s")." WARNING: Insufficient funds.".PHP_EOL.
                date("Y-m-d H:i:s")." DEBUG: This is debug message.".PHP_EOL.
                date("Y-m-d H:i:s")." ALERT: Achtung! Achtung!".PHP_EOL.
                date("Y-m-d H:i:s")." CRITICAL: Medic!! We've got critical damages.".PHP_EOL.
                date("Y-m-d H:i:s")." EMERGENCY: System hung. Contact system administrator immediately!".PHP_EOL;

        file_put_contents("app.log", $log, FILE_APPEND);
    }
}

$log = new Log();
$log->log_info();


