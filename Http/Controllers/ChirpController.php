<?php

namespace KimSpeer\Chirper\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('chirps', []);
    }
}
