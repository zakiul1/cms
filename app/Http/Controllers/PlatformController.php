<?php
namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index()
    {
        $platforms = Platform::all();
        return view('platforms.index', compact('platforms'));
    }

    public function create()
    {
        return view('platforms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|max:2048',
            'url' => 'nullable|url',
        ]);

        $data['logo'] = $request->file('logo')->store('platforms', 'public');

        Platform::create($data);

        return redirect()->route('platforms.index')->with('success', 'Platform added.');
    }

    public function edit(Platform $platform)
    {
        return view('platforms.edit', compact('platform'));
    }

    public function update(Request $request, Platform $platform)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'url' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('platforms', 'public');
        }

        $platform->update($data);

        return redirect()->route('platforms.index')->with('success', 'Platform updated.');
    }

    public function destroy(Platform $platform)
    {
        $platform->delete();
        return redirect()->route('platforms.index')->with('success', 'Platform removed.');
    }
}