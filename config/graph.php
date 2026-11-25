<?php

return [
    'tenant_id' => env('MS_GRAPH_TENANT_ID'),
    'client_id' => env('MS_GRAPH_CLIENT_ID'),
    'client_secret' => env('MS_GRAPH_CLIENT_SECRET'),
    'sender' => env(
        'MS_GRAPH_SENDER',
        'cotizaciones.contacto@coolingenergyhvac.com'
    ),
];
