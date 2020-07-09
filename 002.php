<?php
class Log{
    protected $date;
    function __construct()
    {
        $this->date = date("Y-m-d H:i:s");
    }

    function info($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function error($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function notice($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function warning($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function debug($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function alert($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function critical($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function emergency($message)
    {
        $log = $this->date." $message".PHP_EOL;
        $this->put_contents($log);
    }

    function put_contents($log){
        file_put_contents("app.log", $log, FILE_APPEND);
    }
}

$log = new Log();
$log->info("INFO: This is an information about something.");
$log->error("ERROR: We can't divide any numbers by zero.");
$log->notice("NOTICE: Someone loves your status.");
$log->warning("WARNING: Insufficient funds.");
$log->debug("DEBUG: This is debug message.");
$log->alert("ALERT: Achtung! Achtung!");
$log->critical("CRITICAL: Medic!! We've got critical damages.");
$log->emergency("EMERGENCY: System hung. Contact system administrator immediately!");

