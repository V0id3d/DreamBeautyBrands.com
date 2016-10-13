<?php

namespace App\Http\Controllers\PublicSite;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function shampoo()
    {
        return view ('public.products.shampoo');
    }

    public function conditioner()
    {
        return view ('public.products.shampoo');
    }

    public function masks()
    {
        return view('public.products.mask');
    }

    public function styling()
    {
        return view('public.products.styling');
    }

    public function finishing()
    {
        return view('public.products.finishing');
    }

    public function tools()
    {
        return view('public.products.tool');
    }
}
