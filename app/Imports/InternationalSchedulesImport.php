<?php

namespace App\Imports;

use App\Models\InternationalSchedule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class InternationalSchedulesImport implements 
    ToModel, 
    WithHeadingRow,
    SkipsOnError,
    WithValidation,
    SkipsOnFailure
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable,SkipsErrors,SkipsFailures;
    public function __construct()
    {
        InternationalSchedule::truncate();
    }

    public function model(array $row)
    {
        //var_dump($row);
        return new InternationalSchedule([
            'flightNo' => $row['flightno'],
            'route' => $row['route'],
            'sector' => $row['sector'],
            'days' => $row['day'],
            'departure' => $row['departure'],
            'arrival' => $row['arrival'],
            'aircraft' => $row['aircraft'],
            'status' => $row['status'],
        ]);
    }
    public function rules(): array
    {
        return [
            
        ];
    }
}
