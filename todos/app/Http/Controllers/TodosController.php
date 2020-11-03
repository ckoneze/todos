<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[
            'name'=> 'required',
            'description'=> 'required'

        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        return redirect('/todos')->with('success','Item created successfully!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //$todo = Todo::find($todoId);
        return view('todos.show')->with('todo', $todo);
        //dd($todoId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($todoId)
    {
        $todo = Todo::Find($todoId);
        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($todoId)
    {
        $this->validate(request(),[
            'name'=> 'required',
            'description'=> 'required'

        ]);
        $data = request()->all();
        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();
        return redirect('/todos')->with('success','Item updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();
        return redirect('/todos')->with('success','Item deleted successfully!');

    }

    public function complete(Todo $todo)

    {
        $todo->completed = true;
        $todo->save();
        return redirect('/todos')->with('success','Item completed successfully!');

    }
}
