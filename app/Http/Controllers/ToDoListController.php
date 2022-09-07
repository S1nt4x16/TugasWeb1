<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToDoListController extends Controller
{
    public function index() 
    {
        $todolist = DB::table('webpro')
            ->select("id", "title", "description", "updated_at", "created_at")
            ->get();
        return view('example.index', ["todolist" => $todolist]);
    }   

    public function create() 
    {
        return view('example.create');
    }

    public function store(Request $request) 
    {
        $title = $request->input('title');
        $description = $request->input('description');

        DB::table('webpro')
        ->insert([
            'title'=> $title,
            'description'=> $description,
            'created_at' => now()
        ]);

        return redirect()->route('webpro_master');
    }

    public function edit($id) 
    {
        $todolist = DB::table('webpro')
        ->select("title", "description")
        ->where('id',$id)
        ->first();

    return view('example.edit', [
        "tdl" => $todolist,
        "id" => $id
    ]);

    }

    public function update(Request $request) 
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');

        DB::table('webpro')
        ->where('id', $id)
        ->update([

            'title' => $title,
            'description' => $description,
            'created_at' => now()

        ]);

        return redirect()->route('webpro_master');
    }

    public function delete($id) 
    {
        DB::table('webpro')->where('id', $id)->delete();

        return redirect()->route('webpro_master');
    }
}
