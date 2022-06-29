<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class ErpatController extends Controller
{
    public function init(Request $request) {
        return response()->json( array("success"=>true) );
    }

    public function setup(Request $request) {
        $data = [];

        $general_list = (new Setting())->get_settings_by_type('general');
        foreach($general_list as $item => $val) {
            $data[] = array(
                $val->setting_name => $val->setting_value
            );
        }

        $display_list = (new Setting())->get_settings_by_type('display');
        foreach($display_list as $item => $val) {
            $data[] = array(
                $val->setting_name => $val->setting_value
            );
        }

        $calendar_list = (new Setting())->get_settings_by_type('calendar');
        foreach($calendar_list as $item => $val) {
            $data[] = array(
                $val->setting_name => $val->setting_value
            );
        }

        $finance_list = (new Setting())->get_settings_by_type('finance');
        foreach($finance_list as $item => $val) {
            $data[] = array(
                $val->setting_name => $val->setting_value
            );
        }

        $company_list = (new Setting())->get_settings_by_type('company');
        foreach($company_list as $item => $val) {
            $data[] = array(
                $val->setting_name => $val->setting_value
            );
        }

        $shipping_list = (new Setting())->get_settings_by_type('shipping');
        foreach($shipping_list as $item => $val) {
            $data[] = array(
                $val->setting_name => $val->setting_value
            );
        }

        return response()->json( array(
            "success"=>true,
            "data"=>$data,
        ) );
    }
}
