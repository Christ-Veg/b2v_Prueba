<?php

namespace App\Imports;

use App\Models\Test;
use Maatwebsite\Excel\Concerns\ToModel;

class TestImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Test([
            'pregunta'     => $row[0],
            'respuesta'    => $row[1],
            //
        ]);
    }
}