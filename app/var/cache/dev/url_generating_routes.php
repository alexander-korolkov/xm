<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'api_v1_users' => [[], ['_controller' => 'App\\Application\\v1\\Controller\\HistoricalQuotesController::historicalQuotesEndpoint'], [], [['text', '/api/v1/historical-quotes-endpoint']], [], [], []],
];
