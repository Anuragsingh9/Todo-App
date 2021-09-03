<?php
///////////////////  start localisation\\\\\\\\\\\\\\\\\\\\\\\\\\\

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\App;
//use Illuminate\Support\Facades\Auth;

//Route::get('/lang/{lang}', [AccountController::class, 'setLang'])->name('change-lang');
//
//public function setLang($locale) {
//    App::setLocale($locale);
//    session()->put('locale', $locale);
//    return redirect()->back();
//}

    ///////////this is middleware for localisation
/**
 * -----------------------------------------------------------------------------------------------------------------
 * @description To handle the request for applying localisation
 *
 * 1. First it will check in request if it has lang
 * 2. Else it will check in authenticated user language settings
 * 3. Else it will check in session
 * 4. Else it will use the default language
 * -----------------------------------------------------------------------------------------------------------------
 *
 * @param Request $request
 * @param Closure $next
 * @return mixed
 */
//public function handle(Request $request, Closure $next) {
//    $lang = null;
//    if (request()->has('lang')) {
//        $lang = $this->checkLangCorrect(request()->input('lang'));
//    } else if (Auth::check() && isset(Auth::user()->settings['lang'])) {
//        $lang = $this->checkLangCorrect(Auth::user()->settings['lang']);
//    } else if (session()->has('locale')) {
//        $lang = $this->checkLangCorrect(session()->get('locale'));
//    } else {
//        $lang = $this->checkLangCorrect();
//    }
//    App::setLocale($lang);
//    return $next($request);
//}

/**
 * -----------------------------------------------------------------------------------------------------------------
 * @description This method will check the provided lang is suitable to be a locale of app or not then it will
 * return that else it will return the default locale of app
 * -----------------------------------------------------------------------------------------------------------------
 *
 * @param null $lang
 * @return string
 */
//private function checkLangCorrect($lang = null): string {
//    if (is_string($lang)) {
//        $lang = strtolower($lang);
//        $availableLanguages = array_values(config('superadmin.moduleLanguages'));
//        return in_array($lang, $availableLanguages)
//            ? $lang
//            : config('app.locale');
//    } else {
//        return config('app.locale');
//    }
//}


///////////////////  end localisation\\\\\\\\\\\\\\\\\\\\\\\\\\\

