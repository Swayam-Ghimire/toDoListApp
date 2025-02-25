<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDos;
use App\Models\Difficulty;

class ToDoController extends Controller
{
    public function index() {
        // route --> /welcome
        return view('welcome');
    }

    public function home() {
        // route --> /test/home
        $details = ToDos::with('difficulty')->orderBy('due_date', 'asc') -> paginate(5);
        return view('test.home', ['details' => $details], compact('details'));
    }

    public function create() {
        // route --> /test/create
            $difficulty = Difficulty::all();
            return view('test.create', ['difficulty' => $difficulty]);
        }
    public function show ($id) {
        // route --> /test/{id}
        $details = ToDos::with('difficulty')->findOrFail($id);
        return view('test.show', ['detail' => $details]);
    }

    public function store(Request $request){
        // route --> /test
        $validate = $request->validate([
            'title' => 'required|min:2|max:100|string',
            'description' => 'required|string|min:10|max:255|nullable',
            'due_date' => 'required|date',
            'difficulty_id' => 'required|integer|min:1|max:8',
        ]);
        ToDos::create($validate);
        return redirect()->route('test.home')->with('success', 'Task Created Successfully');
    }
    public function destroy(ToDos $tasks){
        // route --> /test/{id}
        // $tasks = ToDos::findOrFail($id);
        $tasks->delete();
        return redirect()->route('test.home')->with('success', 'Task Deleted Successfully');
    }

    public function edit($id){
        // route --> /test/{id}/{title}
        $tasks = ToDos::findOrFail($id);
        $difficulty = Difficulty::all();
        return view('test.edit', ['tasks' => $tasks], ['difficulty' => $difficulty]);
    }
    
    public function update(Request $request, $id){
        //route --> /test/{id} method=put
        $validate = $request->validate([
            'title' => 'required|min:2|max:100|string',
            'description' => 'required|string|min:10|max:255|nullable',
            'due_date' => 'required|date',
            'difficulty_id' => 'required|integer|min:1|max:8',
        ]);
        ToDos::whereId($id)->update($validate);
        return redirect()->route('test.home')->with('success', 'Task Updated Successfully');
    }
    
    public function complete($id){
        // route --> /test/{id}/complete method=put
        $tasks = ToDos::findOrFail($id);
        $tasks->update(['is_completed' => 1]);
        return redirect()->route('test.home');
    }
}