<?php

namespace App\Filters;


class ProviderFilter
{
    public function filter($query, $providerIds)
    {
        if ($providerIds) {
            $query->whereIn('provider_id', $providerIds);
        }
    }
}
