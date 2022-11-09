<?php

namespace Navel\Excel\Concerns;

use Navel\Excel\Row;

interface OnEachRow
{
    /**
     * @param  Row  $row
     */
    public function onRow(Row $row);
}
