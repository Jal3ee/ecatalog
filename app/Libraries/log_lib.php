<?php
namespace App\Libraries;

class Log_lib
{
    public function addLog($message)
    {
        $logData = session('logData') ?? [];
        $logData[] = [
            'timestamp' => date('Y-m-d H:i:s'),
            'message' => $message,
        ];
        session()->set('logData', $logData);
    }

    public function getLogData()
    {
        return session('logData') ?? [];
    }
}
