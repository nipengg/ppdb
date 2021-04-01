<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(5);
  
        return view('students.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('students.create');
    }

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    public function edit($nis ,Student $student)
    {
        $data = [];

        $data['students'] = DB::select("
            SELECT 
              s.*
            FROM students s
            WHERE
              s.nis = ?
            ", [$nis])[0];

        return view('students.edit', $data);
    }

    public function destroy(){

    }

    public function store(Request $request)
    {
  
        Student::create($request->all());
   
        return redirect('/students')->with('success','Student added successfully.');

    }

    public function update($nis ,Request $request)
    {
        DB::beginTransaction();

        DB::table('students')->where('nis', $nis)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tmpt_lahir' => $request->tmpt_lahir,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        DB::commit();

        return redirect('/students')->with('success','Student edited successfully.');
    }
}
