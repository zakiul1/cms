<?php
namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('footers.index', compact('footers'));
    }

    public function create()
    {
        return view('footers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'section_title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Footer::create($data);

        return redirect()->route('footers.index')->with('success', 'Footer section created.');
    }

    public function edit(Footer $footer)
    {
        return view('footers.edit', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $data = $request->validate([
            'section_title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $footer->update($data);

        return redirect()->route('footers.index')->with('success', 'Footer section updated.');
    }

    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footers.index')->with('success', 'Footer section deleted.');
    }
}