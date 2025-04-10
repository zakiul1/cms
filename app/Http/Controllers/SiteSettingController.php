<?php
namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all();
        return view('site_settings.index', compact('settings'));
    }

    public function create()
    {
        return view('site_settings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|unique:site_settings,key',
            'value' => 'nullable|string',
        ]);

        SiteSetting::create($data);

        return redirect()->route('site-settings.index')->with('success', 'Setting created successfully.');
    }

    public function edit(SiteSetting $siteSetting)
    {
        return view('site_settings.edit', compact('siteSetting'));
    }

    public function update(Request $request, SiteSetting $siteSetting)
    {
        $data = $request->validate([
            'key' => 'required|string|unique:site_settings,key,' . $siteSetting->id,
            'value' => 'nullable|string',
        ]);

        $siteSetting->update($data);

        return redirect()->route('site-settings.index')->with('success', 'Setting updated successfully.');
    }

    public function destroy(SiteSetting $siteSetting)
    {
        $siteSetting->delete();
        return redirect()->route('site-settings.index')->with('success', 'Setting deleted successfully.');
    }
}