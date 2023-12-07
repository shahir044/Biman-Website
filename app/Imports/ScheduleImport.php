<?php

namespace App\Imports;

use App\Models\Schedule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Throwable;

class ScheduleImport implements 
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

    // public function uniqueBy()
    // {
    //     return 'flightNo';
    // }
    public function __construct()
    {
        Schedule::truncate();
    }

    public function model(array $row)
    {
        //dd($row);
        // $exists = Schedule::where('flightNo',$row['flightNo'])->first();
    
        // return new Schedule([
        //     'flightNo' => $row['0'],
        //     'route' => $row['1'],
        //     'days' => $row['2'],
        //     'departure' => $row['3'],
        //     'arrival' => $row['4'],
        //     'status' => $row['5'],
        // ]);

        //dd($row);
        return new Schedule([
            'flightNo' => $row['flightno'],
            'route' => $row['route'],
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

    // public function onFailure(Failure ...$failure)
    // {

    // }
}
