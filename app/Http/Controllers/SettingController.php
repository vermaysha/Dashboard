<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setCollapse(Request $request) {
        settings()->set('sidebar_collapse', $request->collapse);
        settings()->save();
        return response()->json(true);
    }
}
