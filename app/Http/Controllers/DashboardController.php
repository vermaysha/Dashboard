<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.overview', [
            'settings' => settings()
        ]);
    }

    public function report()
    {
        return view('pages.chart', [
            'settings' => settings()
        ]);
    }

    public function table()
    {
        return view('pages.table', [
            'settings' => settings()
        ]);
    }

    public function image()
    {
        return view('pages.image', [
            'settings' => settings()
        ]);
    }
}
