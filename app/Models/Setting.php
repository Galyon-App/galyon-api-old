<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "settings";
    protected $connection = "erpat";

    public function get_settings($setting_name) {
        return $this->where('setting_name', '=', $setting_name)
            ->select('setting_value')->first();
    }
}
