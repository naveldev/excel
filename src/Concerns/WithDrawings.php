<?php

namespace Navel\Excel\Concerns;

use PhpOffice\PhpSpreadsheet\Worksheet\BaseDrawing;

interface WithDrawings
{
    /**
     * @return BaseDrawing|BaseDrawing[]
     */
    public function drawings();
}
