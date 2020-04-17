<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use App\Task;
use Illuminate\Routing\Redirector;

class PostsController extends Controller
{   
    public function getIndex(){
        $task = Task::all();
        return view('layouts.master',['tasks'=>$task]);
    }

    public function create(Request $req) {
        $this->validate($req, [
            'title' => 'required| min:5',
        ]);
        $task = new Task([
            'title'=> $req->input('title'),
        ]);
        $task->save();

        return redirect('/')->with(['message'=>'Created successfully']);
    }
    public function edit(Request $req) {
        $this->validate($req, [
            'title' => 'required|min:5',
        ]);
        $task = Task::find($req ->input('id'));
        $task->title = $req->input('title');
        $task->save();

        return redirect('/')->with(['message'=>'Edited successfully']);
    }

    public function getEdit($id){
        return view('layouts.edit', ['iid'=>$id]);
    }
    public function delete($id){
        Task::find($id)->delete();
        return redirect('/')->with(['message'=>'Deleted successfully']);
    }
}
