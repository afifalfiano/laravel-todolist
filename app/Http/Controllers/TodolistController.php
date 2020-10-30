<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TodolistController extends Controller
{
    //
    public function index() {
        $todolists = Todolist::orderBy('id')->paginate(5);
        return view('todos.index', compact('todolists'));
    }

    public function show($slug) {
        $todolist = Todolist::where('slug', $slug)->first();

        if ($todolist == null) {
            abort(404);
        }

        return view('todos.show', compact('todolist'));
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {

        $request -> validate([
            'todo' => 'required|max:255|min:5',
            'description' => 'required'
        ]);

        Todolist::create([
            'todo' => $request->todo,
            'slug' => Str::slug($request->todo, '-'),
            'description' => $request->description
        ]);

        return \redirect('/todolist')->with('status', 'Success add data!');
    }

    public function edit($id) {
        $todolist = Todolist::find($id);
        return view('todos.edit', compact('todolist'));
    }

    public function update(Request $request, $id) {
        $request -> validate([
            'todo' => 'required|max:255|min:5',
            'description' => 'required'
        ]);

        Todolist::find($id)->update([
            'todo' => $request->todo,
            'description' => $request->description
        ]);

        return redirect('/todolist')->with('status', 'Success update data!');
    }

    public function destroy($id) {
        Todolist::find($id)->delete();

        return redirect('/todolist');
    }
}
