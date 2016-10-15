<?php

namespace App\Http\Controllers\PublicSite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicSiteController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function sendMail(Request $request)
    {
        $this->validateWithBag('sendMail', $request, [
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'message'   => 'required'
        ]);

        return redirect()->back();
    }
}
