<?php

use Illuminate\Database\Seeder;

class MasterSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'kurs' => 13.999,
            'ppn' => 1,
            'site_status' => env('SITE_STATUS', true),
            'meta_title' => env('META_TITLE', 'FE-B2B-Backend-WEB'),
            'meta_description' => env('META_DESCRIPTION', 'FE-B2B-Backend-WEB'),
            'order_expire' => env('ORDER_EXPIRE', 1),
            'transaction_price' => env('TRANSACTION_PRICE', 100000000.00),
            'transaction_point' => env('TRANSACTION_POINT', 1000),
            'member_log_expire' => env('MEMBER_LOG_EXPIRED', 3),
            'created_at' => date("Y-m-d H:i:s"),
			'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
