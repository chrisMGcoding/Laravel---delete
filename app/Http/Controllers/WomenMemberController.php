<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WomenMemberController extends Controller
{
    public function index() {
        return view('pages.women');
    }
}
