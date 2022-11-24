<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Exam;
use App\Models\Faculty;
use App\Models\Hall;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){

        $student = Student::count();
        $supervisor = Supervisor::count();
        $courses = Course::count();
        $hall = Hall::count();
        $faculty = Faculty::count();
        $department = Department::count();
        $exam = Exam::count();
        return view('backend.admin.dashboard', compact('exam','student',
            'supervisor', 'courses', 'hall', 'faculty', 'department'));
    }

    public function students(){

        $student = Student::all();
        return view('backend.admin.student.index', compact('student'));
    }

    public function supervisors(){
        $supervisor = Supervisor::all();
        return view('backend.admin.supervisor.index', compact('supervisor'));
    }




}
