<?php

return [
    'disk' => env('EMAIL_LOG_ATTACHMENT_DISK','email_log_attachments'),
    'custom_template' => env('EMAIL_LOG_CUSTOM_TEMPLATE',null),
    'access_middleware' => env('EMAIL_LOG_ACCESS_MIDDLEWARE',null),
    'access_middleware_api' => env('EMAIL_LOG_ACCESS_MIDDLEWARE_API',null),
    'routes_prefix' => env('EMAIL_LOG_ROUTES_PREFIX',''),
    'routes_prefix_api' => env('EMAIL_LOG_ROUTES_PREFIX_API',''),
    'routes_webhook_prefix' => env('EMAIL_LOG_ROUTES_WEBHOOK_PREFIX', env('EMAIL_LOG_ROUTES_PREFIX','')),
    'mailgun' => [
        'secret' => env('MAILGUN_SECRET', null),
        'filter_unknown_emails' => env('EMAIL_LOG_MAILGUN_FILTER_UNKNOWN_EMAILS', true),
    ],
];
