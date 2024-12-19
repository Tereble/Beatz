<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;

class DashboardController extends Controller
{
    public function index()
    {
        $settings =  GeneralSettings::first();
        return view('admin.dashboard', compact('settings')); // Create this view
    }
}
