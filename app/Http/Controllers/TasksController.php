<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $task=Task::all();
        return view('task.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required|max:255|string',
        'work'=>'required|max:255|string',
        'dueDate'=>'required|max:255|string',
       ]);

       Task::create([
        'name'=>$request->name,
        'work'=>$request->work,
        'dueDate'=>$request->dueDate
       ]);

       return redirect('create')->with('status','Todo Created !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task=Task::findOrFail($id);

        return view('task.update',compact('task'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'work'=>'required|max:255|string',
            'dueDate'=>'required|max:255|string',
        ]);
        
        Task::findOrFail($id)->update([
            'name'=>$request->name,
            'work'=>$request->work,
            'dueDate'=>$request->dueDate
        ]);

        return redirect()->back()->with('status','Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $task=Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('status','Category Deleted !');
    }
}
