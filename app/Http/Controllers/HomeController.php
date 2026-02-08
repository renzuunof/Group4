<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $posts = Home::when($search, function ($query, $search) {
            $query->where('first_name', 'like', "%{$search}%")
                ->orWhere('last_name', 'like', "%{$search}%")
                ->orWhere('middle_name', 'like', "%{$search}%")
                ->orWhere('contact_info', 'like', "%{$search}%")
                ->orWhere('marital_status', 'like', "%{$search}%");
        })->get();

        return view('home.index', compact('posts'));
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'contact_info' => 'required|string|max:255',
            'marital_status' => 'required|in:single,married',
        ]);

        Home::create($request->only(['first_name', 'last_name', 'middle_name', 'contact_info', 'marital_status']));

        return redirect()->route('home.index')->with('success', 'Record created successfully!');
    }


    public function destroy($id)
    {
        $post = Home::findOrFail($id);
        $post->delete();

        return redirect()->route('home.index')
                         ->with('success', 'Record deleted successfully!');
    }

public function show($id)
    {
        $post = Home::findOrFail($id);
        return view('home.show', compact('post'));
    }

  public function edit($id)
    {
        $post = Home::findOrFail($id);
        return view('home.edit', compact('post'));
    }

   public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'contact_info' => 'required|string|max:255',
            'marital_status' => 'required|in:single,married',
        ]);

        $post = Home::findOrFail($id);
        $post->update($request->only(['first_name', 'last_name', 'middle_name', 'contact_info', 'marital_status']));

        return redirect()->route('home.index')->with('success', 'Record updated successfully!');
    }
}
