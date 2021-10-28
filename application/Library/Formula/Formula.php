<?php

namespace App\Library\Formula;

use App\Library\Formula\Abstracts\FormulaAbstracts;

class Formula extends FormulaAbstracts
{
    public function calculate()
    {
        return $this->{strtolower($this->operation)}();
    }
}