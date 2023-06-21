<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin email configuration
    |--------------------------------------------------------------------------
    |
    | Set the admin email. This will be used to send email when user contact through contact page.
    |
    */
    'admin_email' => env('ADMIN_EMAIL'),

    /*
    |--------------------------------------------------------------------------
    | Shop url configuration
    |--------------------------------------------------------------------------
    |
    | Shop url is used in order placed template to go to shop order page.
    |
    */
    'shop_url' => env('SHOP_URL'),

    'dashboard_url' => env('DASHBOARD_URL'),

    'media_disk' => env('MEDIA_DISK'),

    'stripe_api_key' => env('STRIPE_API_KEY'),

    'app_notice_domain' => env('APP_NOTICE_DOMAIN', 'MARVEL_'),

    'dummy_data_path' => env('DUMMY_DATA_PATH', 'pickbazar'),

    'default_language' => env('DEFAULT_LANGUAGE', 'en'),

    'translation_enabled' => env('TRANSLATION', true),

    'default_currency' => env('DEFAULT_CURRENCY', 'USD'),

    'active_payment_gateway' => env('ACTIVE_PAYMENT_GATEWAY', 'stripe'),

    'razorpay' => [
        'key_id' => env('RAZORPAY_KEY_ID'),
        'key_secret' => env('RAZORPAY_KEY_SECRET'),
        'webhook_secret' => env('RAZORPAY_WEBHOOK_SECRET_KEY')
    ],

    'mollie' => [
        'mollie_key' => env('MOLLIE_KEY'),
        'webhook_url' => env('MOLLIE_WEBHOOK_URL'),
    ],

    'stripe' => [
        'api_secret' => env('STRIPE_API_KEY'),
        'webhook_secret' => env('STRIPE_WEBHOOK_SECRET_KEY')
    ],

    'paystack' => [
        'public_key' => env('PAYSTACK_PUBLIC_KEY'),
        'secret_key' => env('PAYSTACK_SECRET_KEY'),
    ],

    'paypal' => [
        'mode'           => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
        'sandbox'        => [
            'client_id'     => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
            'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
        ],
        'live'           => [
            'client_id'     => env('PAYPAL_LIVE_CLIENT_ID', ''),
            'client_secret' => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
        ],
        'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
        'webhook_id'     => env('PAYPAL_WEBHOOK_ID'),
        'currency'       => env('PAYPAL_CURRENCY', 'USD'),
        'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
        'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
        'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
    ],
];
