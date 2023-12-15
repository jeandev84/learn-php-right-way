<?php

namespace Tests\DataProviders;

class RouterDataProvider
{
    public function routeNotFoundCases(): array
    {
        return [
            ['/users', 'PUT'],
            ['/invoices', 'POST'],
            ['/users', 'GET'],
            ['/users', 'POST'],
        ];
    }
}