<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenagaAhliController extends Controller
{
    public function index() {
        return view('pages.tenagaahli.index');
    }

    public function create() {
        return view('pages.tenagaahli.create');

        
    }
}
