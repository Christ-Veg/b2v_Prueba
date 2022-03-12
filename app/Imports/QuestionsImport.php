<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Test;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QuestionsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new questions([
            'question' => row[0],
            'answer' => row[1],

        ]);
    }
}
