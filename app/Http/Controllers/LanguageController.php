<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $locale)
    {
        $language = in_array($locale, ['en', 'vi']) ? $locale : config('app.locale');
        Session::put('locale', $language);

        return redirect()->back();
    }
}
