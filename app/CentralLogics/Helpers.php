<?php

namespace App\CentralLogics;

use App\Models\Country;
use App\Models\Settings;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class Helpers
{

    public static function getCountries(){
        return Country::select('id','name','dial_code')->orderBy('name')->get();
    }

    public static function getStates($country_id){
        return Country::select('id','name')->where('country_id',$country_id)->orderBy('name')->get();
    }

    public static function getCities($state_id){
        return Country::select('id','name')->where('state_id',$state_id)->orderBy('name')->get();
    }

    public static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function getModelFillables($modelName)
    {
        return App::make($modelName)->getFillable();
    }

    public static function array_except($array, $keys)
    {
        foreach ($keys as $key) {
            unset($array[$key]);
        }
        return $array;
    }

    public static function js($script){
        echo "<script>".$script."</script>";
    }

    public static function getSettingValue($field)
    {
        return Settings::where('field', $field)->first()->value;
    }

    public static function isAdmin()
    {
        return Auth::user()->getRoleNames()[0] == 'admin';
    }

    public static function upload(string $dir, string $format, $image = null, $uploadedFileName = null)
    {
        if ($image != null) {
            $imageName = \Carbon\Carbon::now()->toDateString() . "-" . uniqid();
            if($uploadedFileName){
                $imageName = $uploadedFileName;
            }
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir);
            }
            Storage::disk('public')->put($dir . $imageName, file_get_contents($image));
        } else {
            $imageName = 'def.png';
        }

        return $imageName;
    }

}
