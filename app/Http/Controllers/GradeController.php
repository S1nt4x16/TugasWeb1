<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function index() 
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades'));
    }

    public function create() 
    {
        return view('grades/create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'grades' => 'required',
            'amount' => 'required',
        ]);

        Grade::create($request->all());

        return redirect()->route('grade.index')->with('success', 'Berhasil Menambahkan.');
    }


    public function edit($id) 
    {
        $grades = Grade::find($id);
        return view('grades.edit', [
           'grades' => $grades,
           'id' => $id,
        ]);
    }

    public function update(Request $request, $id) 
    {
        $this->validate($request,[
            'grades' => 'required',
            'amount' => 'required',
        ]);

        // $grades = Grade::find($id);
        // $grades->grades = $request->grades;
        // $grades->amount = $request->amount;

        // $grades->save();
        $grades = Grade::find($id);
        $grades->update($request->all());

        return redirect()->route('grade.index')->with('success', 'Berhasil Mengupdate Data.');
    }

    public function destroy($id) 
    {
        $grades = Grade::find($id);
        $grades->delete();

        return redirect()->back();
    }
}
