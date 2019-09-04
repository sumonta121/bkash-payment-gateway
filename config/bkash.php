<?php

use Shipu\Bkash\Enums\BkashKey;
use Shipu\Bkash\Enums\BkashSubDomainType;

return [
    BkashSubDomainType::TOKENIZED => [
        BkashKey::SANDBOX       => env("BKASH_TOKENIZE_SANDBOX", true),
        BkashKey::VERSION       => env("BKASH_TOKENIZE_VERSION", "v1.2.0-beta"),
        BkashKey::APP_KEY       => env("BKASH_TOKENIZE_APP_KEY", ""),
        BkashKey::APP_SECRET    => env("BKASH_TOKENIZE_APP_SECRET", ""),
        BkashKey::USER_NAME     => env("BKASH_TOKENIZE_USER_NAME", ""),
        BkashKey::PASSWORD      => env("BKASH_TOKENIZE_PASSWORD", ""),
        BkashKey::CALL_BACK_URL => env("BKASH_TOKENIZE_CALL_BACK_URL", ""),
    ],
    BkashSubDomainType::CHECKOUT => [
        BkashKey::SANDBOX       => env("BKASH_CHECKOUT_SANDBOX", true),
        BkashKey::VERSION       => env("BKASH_CHECKOUT_VERSION", "v1.2.0-beta"),
        BkashKey::APP_KEY       => env("BKASH_CHECKOUT_APP_KEY", ""),
        BkashKey::APP_SECRET    => env("BKASH_CHECKOUT_APP_SECRET", ""),
        BkashKey::USER_NAME     => env("BKASH_CHECKOUT_USER_NAME", ""),
        BkashKey::PASSWORD      => env("BKASH_CHECKOUT_PASSWORD", ""),
        BkashKey::CALL_BACK_URL => env("BKASH_CHECKOUT_CALL_BACK_URL", ""),
        BkashKey::SANDBOX_SCRIPT => env("BKASH_CHECKOUT_SANDBOX_SCRIPT", ""),
        BkashKey::PRODUCTION_SCRIPT => env("BKASH_CHECKOUT_PRODUCTION_SCRIPT", ""),
    ],
    BkashSubDomainType::PAYMENT => [
        BkashKey::SANDBOX       => env("BKASH_PAYMENT_SANDBOX", true),
        BkashKey::VERSION       => env("BKASH_PAYMENT_VERSION", "v1.2.0-beta"),
        BkashKey::APP_KEY       => env("BKASH_PAYMENT_APP_KEY", ""),
        BkashKey::APP_SECRET    => env("BKASH_PAYMENT_APP_SECRET", ""),
        BkashKey::USER_NAME     => env("BKASH_PAYMENT_USER_NAME", ""),
        BkashKey::PASSWORD      => env("BKASH_PAYMENT_PASSWORD", ""),
        BkashKey::CALL_BACK_URL => env("BKASH_PAYMENT_CALL_BACK_URL", ""),
    ]
];
