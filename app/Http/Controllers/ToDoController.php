<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();
        $data = compact('todos');
        return view("welcome")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required'
            ]
        );
        $todo = new Todos;
        $todo->title = $request['title'];
        $todo->description = $request['description'];
        $todo->save();

        return redirect(route("todo.home"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Todos $toDos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todo = Todos::find($id);
        $data = compact('todo');
        return view("update")->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required'
            ]
        );
        $id = $request['id'];
        $todo = Todos::find($id);
        $todo->id = $request['id'];
        $todo->title = $request['title'];
        $todo->description = $request['description'];
        $todo->save();

        return redirect(route("todo.home"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Todos::find($id)->delete();
        return redirect(route("todo.home"));
    }
}
