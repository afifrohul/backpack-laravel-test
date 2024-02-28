<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shortlink;

class RedirectController extends Controller
{
    public function redirectLink($code)
    {
        $find = Shortlink::where('code', $code)->first();
        if (is_null($find)) {
            // return view('guest.pages.shortlink.page-nf-shortlink');
            return abort(404);
        } else {
            return redirect($find->link);           
        }
    }
}
