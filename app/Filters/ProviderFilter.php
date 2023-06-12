<?php

namespace App\Filters;


use App\Contracts\Filter;

class ProviderFilter implements Filter
{
    public function filter($query, $providerIds)
    {
        if ($providerIds) {
            $query->whereIn('provider_id', $providerIds);
        }
    }
}
