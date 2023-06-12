<?php

namespace App\Contracts;


interface Filter
{
    public function filter($query, $ids);
}
