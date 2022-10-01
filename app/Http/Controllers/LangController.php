<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\RedirectResponse;

class LangController extends Controller
{
    public function setLang($locale) 
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
