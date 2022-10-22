<?php

namespace App\Http\Controllers;

use App\CentralLogics\Helpers;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller{
    public $settings;

    public function __construct()
    {
        $this->settings = Settings::all()->toQuery();
    }

    public function index()
    {
        return view('admin.settings');
    }
    
    public function update(Request $request)
    {
        $updateField= [];
        foreach ($request->except('_token') as $key => $val){
            $updateField[]=['id'=> $this->settings->where('field', $key)->first()->id,'field'=> $key, 'value'=> $val];
        }
        $saved= Settings::upsert($updateField, ['id','field'], ['value']);
        if($saved){
            Helpers::js("parent.loader.remove();parent.openDialog('Settings', 'Update success');parent.disableButton()");
        }else{
            Helpers::js("parent.loader.remove();parent.openDialog('Update error', 'Please try again')");
        }
    }

    public function getSettingValue($field) {
        return $this->settings->where('field', $field)->first()->value;
    }

}