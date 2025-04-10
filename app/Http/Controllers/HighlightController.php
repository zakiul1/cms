<?php
namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $highlights = Highlight::all();
        return view('highlights.index', compact('highlights'));
    }

    public function create()
    {
        return view('highlights.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('highlights', 'public');
        }

        Highlight::create($data);

        return redirect()->route('highlights.index')->with('success', 'Highlight added successfully.');
    }

    public function edit(Highlight $highlight)
    {
        return view('highlights.edit', compact('highlight'));
    }

    public function update(Request $request, Highlight $highlight)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('highlights', 'public');
        }

        $highlight->update($data);

        return redirect()->route('highlights.index')->with('success', 'Highlight updated.');
    }

    public function destroy(Highlight $highlight)
    {
        $highlight->delete();
        return redirect()->route('highlights.index')->with('success', 'Highlight deleted.');
    }

}