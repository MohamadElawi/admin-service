<?php

namespace App\Exports;

use App\Models\Maintenance;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaintenanceExport implements FromCollection
{
    private $i = 0 ;
    public function map($users): array
    {
        return [
            $this->i += 1 ,
            $users->user_name,
            $users->email,
            $users->phone,
            $users->address,
            $users->gender,
            $users->status,
            $users->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            '#' ,
            'Name',
            'Email',
            'phone',
            'address',
            'gender' ,
            'Status',
            'Created_at',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 10,
            'c' => 15,
            'd' => 10,
            'e' => 25,
            'f' => 7,
            'g' => 7,
            'h' => 20,
        ];
    }


    public function collection()
    {
        return  $users = User::get();
    }
}
