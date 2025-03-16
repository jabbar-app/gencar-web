<?php

namespace App\Exports;

use App\Models\QuizResult;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResultsExport implements FromCollection, WithHeadings
{
    protected $stage;

    public function __construct($stage)
    {
        $this->stage = $stage;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return QuizResult::where('quiz_stage', $this->stage)
            ->with('user')
            ->get()
            ->map(function ($result) {
                return [
                    'Rank' => null,  // Ini bisa dihitung dalam view atau di sini jika diperlukan
                    'Peserta' => $result->user->name,
                    'Skor' => $result->correct_answers,
                    'Waktu' => gmdate('H:i:s', $result->total_time),
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Rank',
            'Peserta',
            'Skor',
            'Waktu',
        ];
    }
}
