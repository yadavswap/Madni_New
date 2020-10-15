<?php

namespace App\Imports;

use App\TntPrice;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TntImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        // TntPrice::truncate();
        return [
            new TntExpressDocImport(),
            new TntExpressNonDocImport(),
            new TntEconomyNonDocImport(),
        ];
    }
}
