<?php

namespace App\Exports;

use App\Models\Sender;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KlasifikasiSurat implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Sender::all();
    }

    public function headings(): array
    {
        return [
            "Kode Surat", "Klasifikasi Surat", "Surat Tertaut"
        ];
    }

    public function map($sender): array
    {
        return [
            $sender->letter_code,
            $sender->name_type,
        ];
    }
}