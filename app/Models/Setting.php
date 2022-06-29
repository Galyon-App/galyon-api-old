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

    public function get_settings_by_type($type_name) {
        return $this->where('type', '=', $type_name)
            ->select('setting_name', 'setting_value')->get();
    }
}
