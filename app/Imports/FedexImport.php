<?php

namespace App\Imports;

use App\FedexPrice;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class FedexImport implements WithMultipleSheets
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
            new FedexImportDocExpress($this->pricecategoryid),
            new FedexImportNDocExpress($this->pricecategoryid),
            new FedexExportDocExpress($this->pricecategoryid),
            new FedexExportNDocExpress($this->pricecategoryid),
          
        ];
    }
}
