<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index() {
        return view('pages.perusahaan.index');
    }

    public function create() {
        return view('pages.perusahaan.create');
    }
}
