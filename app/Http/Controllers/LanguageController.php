<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {
        // Tao session va gan gia tri ngon ngu duoc chon tu view
        Session::put('language', $language);
        return redirect()->back();
    }
}
