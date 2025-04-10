<?php
namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {
        $aboutSections = AboutSection::all();
        return view('about_sections.index', compact('aboutSections'));
    }

    public function create()
    {
        return view('about_sections.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'video_url' => 'nullable|url',
        ]);

        AboutSection::create($data);

        return redirect()->route('about-sections.index')->with('success', 'About section created.');
    }

    public function edit(AboutSection $aboutSection)
    {
        return view('about_sections.edit', compact('aboutSection'));
    }

    public function update(Request $request, AboutSection $aboutSection)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'video_url' => 'nullable|url',
        ]);

        $aboutSection->update($data);

        return redirect()->route('about-sections.index')->with('success', 'About section updated.');
    }

    public function destroy(AboutSection $aboutSection)
    {
        $aboutSection->delete();
        return redirect()->route('about-sections.index')->with('success', 'About section deleted.');
    }
}