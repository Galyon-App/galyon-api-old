<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SettingSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('erpat')->statement("INSERT INTO `settings` (`type`, `setting_name`, `setting_value`) VALUES
        ('galyon', 'secret_key', 'SECRET_KEY'),
        ('galyon', 'currencySymbol', '₱'),
        ('galyon', 'currencySide', 'left'),
        ('galyon', 'appDirection', 'ltr'),
        ('galyon', 'logo', 'logo.png'),
        ('galyon', 'delivery', 'disable'),
        ('galyon', 'reset_pwd', 'email'),
        ('galyon', 'user_login', 'email'),
        ('galyon', 'currency_code', 'PHP'),
        ('galyon', 'web_login', 'email'),
        ('galyon', 'featured_categories', '[]'),
        ('galyon', 'phone', '+6391234567890'),
        ('galyon', 'email', 'info@galyon.dev'),
        ('galyon', 'address', 'B10 L18 Silcas Village, Brgy. San Francisco '),
        ('galyon', 'city', 'Biñan City'),
        ('galyon', 'province', 'Laguna'),
        ('galyon', 'zipcode', '4024'),
        ('galyon', 'country', 'Philippines'),
        ('galyon', 'minimum_order', '500'),
        ('galyon', 'free_delivery', '0'),
        ('galyon', 'tax', '0'),
        ('galyon', 'shipping', 'fixed'),
        ('galyon', 'shippingPrice', '0'),
        ('galyon', 'app_close', '1'),
        ('galyon', 'app_close_message', 'App is currently on Maintenance.'),
        ('galyon', 'cod_enable', '1'),
        ('galyon', 'cod_data', '{\"env\":\"production\",\"test\":\"test\",\"live\":\"test\",\"code\":\"PHP\"}'),
        ('galyon', 'paypal_enable', '0'),
        ('galyon', 'paypal_data', '{\"env\":\"sandbox\",\"test\":\"test\",\"live\":\"test\",\"code\":\"USD\"}'),
        ('galyon', 'gcash_enable', '0'),
        ('galyon', 'gcash_data', '{\"env\":\"sandbox\",\"test\":\"test\",\"live\":\"test\",\"code\":\"USD\"}'),
        ('galyon', 'paymongo_enable', '0'),
        ('galyon', 'paymongo_data', '{\"env\":\"sandbox\",\"test\":\"test\",\"live\":\"test\",\"code\":\"USD\"}'),
        ('galyon', 'stripe_enable', '0'),
        ('galyon', 'stripe_data', '{\"env\":\"sandbox\",\"test\":\"test\",\"live\":\"test\",\"code\":\"USD\"}'),
        ('galyon', 'shippingBase', '0');");
    }
}
