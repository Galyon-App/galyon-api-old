<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UtilityTrait;

class SettingController extends Controller
{
    use UtilityTrait;

    public function company_info(Request $request) {

        $site_logo = (new Setting())->get_settings('app_title')->setting_value;

        $site_name = (new Setting())->get_settings('site_logo')->setting_value;
        if( $this->is_serialized($site_name) ) {
            $serials = unserialize($site_name);
            $file_name = $serials['file_name'];
            $file_uri = env("ERPAT_HOST", "http://localhost:8000") . "/files/system/";
            $file_url = $this->getFile( $file_uri.$file_name, "system" );
        } else {
            $file_url = false;
        }

        return response()->json( array(
            "success"=>true,
            "title"=>$site_name,
            "logo"=>$file_url
        ) );
    }
}
