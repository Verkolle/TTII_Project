<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function __invoke(Request $request, $locale){
        return redirect(url()->previous())->withCookie(cookie()->forever('language', $locale));
    }
}
