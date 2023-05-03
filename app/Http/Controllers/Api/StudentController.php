<?php

namespace App\Http\Controllers\API;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        if($students->count() > 0){

            return response()->json([
                'students' => $students
            ], 200);
        }else {

            return response()->json([
                'message' => 'No Records Found'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:191',
            'nim' => 'required|string|max:191',
            'jurusan' => 'required|string|max:191',
            'alamat' => 'required|string|max:191',
            'tahun_masuk' => 'required|string|max:191',
            'no_telp' => 'required|digits:10',
            'deskripsi' => 'required|string|max:191',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($validator->fails()){
            
            return response()->json([
                'errors' => $validator->messages()
            ], 422);
        }else{

            $student = Student::create([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'jurusan' => $request->jurusan,
                'alamat' => $request->alamat,
                'tahun_masuk' => $request->tahun_masuk,
                'no_telp' => $request->no_telp,
                'deskripsi' => $request->deskripsi,
                'photo' => $request->photo
            ]);

            if($student){

                return response()->json([
                    'message' => "Student Created Successfully"
                ],200);
            }else{

                return response()->json([
                    'message' => "Somethong Went Wrong"
                ],500);
            }
        }
    }

    public function show($id)
    {
        $student = Student::find($id);
        if($student){

            return response()->json([
                'student' => $student
            ],200);
        }else{

            return response()->json([
                'message' => "No Such Student Found!"
            ],404);
        }
    }

    public function edit($id)
    {
        $student = Student::find($id);
        if($student){

            return response()->json([
                'student' => $student
            ],200);
        }else{

            return response()->json([
                'message' => "No Such Student Found!"
            ],404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:191',
            'nim' => 'required|string|max:191',
            'jurusan' => 'required|string|max:191',
            'alamat' => 'required|string|max:191',
            'tahun_masuk' => 'required|string|max:191',
            'no_telp' => 'required|digits:10',
            'deskripsi' => 'required|string|max:191',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($validator->fails()){
            
            return response()->json([
                'errors' => $validator->messages()
            ], 422);
        }else{

            $student = Student::find($id);
            if($student){
                
                $student -> update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'jurusan' => $request->jurusan,
                    'alamat' => $request->alamat,
                    'tahun_masuk' => $request->tahun_masuk,
                    'no_telp' => $request->no_telp,
                    'email' => $request->email,
                    'deskripsi' => $request->deskripsi,
                    'photo' => $request->photo,
                ]);

                return response()->json([
                    'message' => "Student Updated Successfully"
                ],200);
            }else{

                return response()->json([
                    'message' => "No Such Student Found!"
                ],404);
            }
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if($student){

            $student->delete();

            return response()->json([
                'message' => "Student Deleted Successfully"
            ],200);
        }else{

            return response()->json([
                'message' => "No Such Student Found!"
            ],404);
        }
    }
}
