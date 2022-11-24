<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

Class AuthHelper {

    public static function user() {
        return Auth::user();
    }

    public static function student() {

        return Auth::user()->student;
    }

//    public static function admin() {
//        return Auth::user()->admin;
//    }

    public static function supervisor() {
        return Auth::user()->supervisor;
    }
}
