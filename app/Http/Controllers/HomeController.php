<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Home::all();
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

<<<<<<< HEAD
    public function destroy($id)
    {
        $post = Home::findOrFail($id);
        $post->delete();

        return redirect()->route('home.index')
                         ->with('success', 'Record deleted successfully!');
    }

    // Other CRUD methods (show, edit, update) are not implemented as per the task
=======
    // Other CRUD methods (show, edit, update, delete) are not implemented as per the task

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







>>>>>>> 9e6cf7f4d097b622b73ade1cd9f32231789ad283
}
