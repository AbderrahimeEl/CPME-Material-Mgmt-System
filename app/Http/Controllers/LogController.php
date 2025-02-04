<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function viewLogs()
    {
        $path = storage_path('logs/material.log');
        $logs = [];
        if (File::exists($path)) {
            $logs = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            return response()->view('logs.log', compact('logs'));
        }
        return response()->view('logs.log', ['logs' => 'No logs available']);
    }
}
