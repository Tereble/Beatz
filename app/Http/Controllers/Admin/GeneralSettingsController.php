<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GeneralSettings;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = GeneralSettings::all();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'app_name' => 'required',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'currency' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

       

        $logoPath = null;
        $iconPath = null;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logo', 'public');
        }

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('logo', 'public');
        }

        GeneralSettings::create([
            'app_name' => $request->app_name,
            'logo' => $logoPath,
            'currency' => $request->currency,
            'icon' => $iconPath,
        ]);

        return redirect()->route('admin.settings.create')->with('success', 'Settings created successully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */

     public function show(GeneralSettings $settings)
     {
        return view('admin.settings.edit', compact('settings'));
     }


     public function edit($id)
     {
         $settings = GeneralSettings::findOrFail($id); // Explicit query
         return view('admin.settings.edit', compact('settings'));
     }
     
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneralSettings $settings)
    {
        $request->validate([
            'app_name' => 'required',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'currency' => 'required',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        // Keep the current paths if no new file is uploaded
        $logoPath = $settings->logo;
        $iconPath = $settings->icon;
    
        // Handle logo upload and deletion of old file
        if ($request->hasFile('logo')) {
            if ($logoPath && Storage::exists('public/' . $logoPath)) {
                Storage::delete('public/' . $logoPath);
            }
            $logoPath = $request->file('logo')->store('logo', 'public');
        }
    
        // Handle icon upload and deletion of old file
        if ($request->hasFile('icon')) {
            if ($iconPath && Storage::exists('public/' . $iconPath)) {
                Storage::delete('public/' . $iconPath);
            }
            $iconPath = $request->file('icon')->store('icon', 'public'); // Store icon in 'icon' folder
        }
    
        // Update settings
        $settings->update([
            'app_name' => $request->app_name,
            'logo' => $logoPath,
            'currency' => $request->currency,
            'icon' => $iconPath,
        ]);
    
        return redirect()->route('admin.settings.index')->with('success', 'Settings Updated');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralSettings $settings)
    {
        $settings->delete();

        return redirect()->route('admin.settings.index')->with('success', 'Settings Deleted');
    }
}
