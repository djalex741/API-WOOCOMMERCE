<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost:8080/complemento_360/', 
    'ck_fed8cc57b29b1bbd5b64a4e7595f053ec5e041f2', 
    'cs_df193528a3c127dfd36709a3c6e3697d9bb7d92e',
    [
        'version' => 'wc/v3',
    ]
);

print_r($woocommerce->get('products')); ?>