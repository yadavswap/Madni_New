<?php

namespace App\Imports;

use App\TntPrice;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TntImport implements WithMultipleSheets
{

    private $pricecategoryid;

    public function __construct($pricecategoryid)
    {
        $this->pricecategoryid = $pricecategoryid;
    }


    public function sheets(): array
    {
        // TntPrice::truncate();
        return [
            new TntExpressDocImport($this->pricecategoryid),
            new TntExpressNonDocImport($this->pricecategoryid),
            new TntEconomyNonDocImport($this->pricecategoryid),
            new TntExpressDocExport($this->pricecategoryid),
            new TntExpressNonDocExport($this->pricecategoryid),
            new TntEconomyNonDocExport($this->pricecategoryid),
        ];
    }
}
