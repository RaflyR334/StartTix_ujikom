<?php

namespace App\Services;

use Midtrans\Snap;
use Midtrans\Config;

class MidtransService
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createSnapToken($pemesanan)
    {
        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . $pemesanan->id,
                'gross_amount' => $pemesanan->total_harga,
            ],
            'customer_details' => [
                'first_name' => $pemesanan->nama_pemesan,
                'email' => 'pemesan@example.com', // Optional
            ],
            'enabled_payments' => ['gopay', 'shopeepay', 'other_qris'],
        ];

        return Snap::getSnapToken($params);
    }
}
