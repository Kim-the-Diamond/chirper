<?php

namespace KimSpeer\Chirper\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

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
