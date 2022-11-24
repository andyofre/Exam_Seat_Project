<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SupervisorController extends Controller
{
    //

    public function index(){

        return view('backend.supervisor.index');
    }

    public function create(){

        return view('backend.admin.supervisor.create');

    }

  public  function store(Request $request){

        $validate = Validator::make($request->all(), [
                'name' => 'required',
                'gender' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email|unique:users',
                'faculty' => 'required',
                'department' => 'required',
//                'password' => 'required|min:8',
//                'confirm_password' => 'required_with:password|same:password|min:6'

        ])->validate();

      $name = $request->name;
      $email = $request->email;
      $phone = $request->phone;
      $gender = $request->gender;
      $faculty = $request->faculty;
      $department = $request->department;
      $password = $request->password;




      $data = new Supervisor();
//
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->gender = $request->gender;
      $data->faculty = $request->faculty;
      $data->department = $request->department;
      $data->password = Hash::make($request['phone']);

////            dd($data);
      $user = User::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['phone']),
          'role' => '2',
      ]);


      $data->user_id  = $user->id;

        $data->save();

      Alert::success('success', 'Supervisor has been added successfully');

      return redirect()->back();

  }
}
