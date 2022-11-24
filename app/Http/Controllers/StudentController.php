<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use App\Models\Faculty;
use App\Models\Picked;
use App\Models\Student;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        return view('registration');
    }


    public function dashboard(){

        $faculty = Faculty::all();

        // $student = AuthHelper::student();

        $student = Auth::user()->id;

        // dd($student);












        // $course = Picked::where('id', $student_id)->get();

        // dd($course);

        return view('backend.student.index', compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $valadate = Validator::make($request->all(), [

                'fullName' => 'required',
                'matricNumber' => 'required',
                'faculty' => 'required',
                'department' => 'required',
                'level' => 'required',
                'gender' => 'required',
                'phoneNumber' => 'required',
                'email' => 'required|unique:students,email',
                'password' => 'min:8|required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'min:8'

            ])->validate();

        $full_name = $request->full_name;
        $matricNumber = $request->matricNumber;
        $faculty = $request->faculty;
        $department= $request->department;
        $level = $request->level;
        $gender = $request->gender;
        $phoneNumber = $request->phoneNumber;
        $email = $request->email;
        $password = $request->password;




        $data = new Student();
//
            $data->fullName = $request->fullName;
            $data->matricNumber = $request->matricNumber;
            $data->faculty = $request->faculty;
            $data->department = $request->department;
            $data->level = $request->level;
            $data->gender = $request->gender;
            $data->phoneNumber = $request->phoneNumber;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

////            dd($data);
        $user = User::create([
            'name' => $request['fullName'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => '1',
        ]);


        $data->user_id  = $user->id;



        $data->save();
        if ($data->save() == true) {
            return redirect()->back()->with('success_message', 'Registration was successful, Login to to check Exam number! 😀');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
