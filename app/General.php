<?php
/**
 * Created by PhpStorm.
 * User: alexi
 * Date: 01/09/2018
 * Time: 00:36
 */

namespace App;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Monarobase\CountryList\CountryList;

class General
{
    public static function getEnumValues($table, $column) {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }
    public static function getCountriesKey(){
        $countryList=new CountryList();
        if(Session::get('locale')=='fr'){
            $countries=$countryList->getList('fr','php');
        }else{
            $countries=$countryList->getList('en','php');
        }

        $tab=array();
        foreach ($countries as $key=>$value){
            $tab[]=$key;
        }
        return $tab;
    }
    public static function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
}