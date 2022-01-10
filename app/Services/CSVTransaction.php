<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSVTransaction extends Model
{
    use HasFactory;

    public $csvFile;

    public function __construct()
    {
        $this->csvFile = storage_path('app/public/transactions.csv');
    }

    public function get()
    {
        return $this->readCSV()->map(function ($row) {
            $row->source = 'csv';
            return $row;
        });
    }

    protected function readCSV()
    {
        $rows = array_map('str_getcsv', file($this->csvFile));
        $header = array_shift($rows);
        $csv = collect();

        foreach ($rows as $row)
            $csv->push((object)array_combine($header, $row));
            
        return $csv;
    }
}
