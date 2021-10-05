<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InquiryPageController extends Controller
{

    public function show()
    {
        return view('inquiry');
    }
}
