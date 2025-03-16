<?php

namespace App\Http\Controllers;

use App\Exports\ResultsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ResultExportController extends Controller
{
    public function export($stage)
    {
        return Excel::download(new ResultsExport($stage), 'Hasil Olimpiade - ' . $stage . '.xlsx');
    }
}
