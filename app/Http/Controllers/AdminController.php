<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use App\Campus;

class AdminController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('auth:admin');
	}
	
	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		return view('admin.dashboard');
	}


	public function showAdmins(){
		$admins = Admin::all();
		return view('admin.admins')->withAdmins($admins);
	}
	public function createAdmin(Request $request){
		
		$this->validate($request,[
			'full_name' => 'required|string',
			'email' => 'required|unique:admins|email',
			'role' => 'required',
			'password' => 'required|min:6',
			'password'=> 'required|min:6|confirmed'
			]);

			$admin = new Admin;
			$admin->name = $request->full_name;
			$admin->email = $request->email;
			$admin->job_title = $request->role;
			$admin->password = Hash::make($request->password);
			$admin->save();
			return redirect()->route('admin.admins')->with('success', 'The Administrator has been created Successfully');
		}


    public function locationCreate(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:campuses,name',
            'desciption' => 'nullable',

        ]);

        $location = new Campus;
        $location->name = $request->name;
        $location->description = $request->description;
        $location->save();
        return redirect()->route('admin.locationindex')->with('success', 'Successfully added new location');
    }

    public function locationDelete($id){
        $location = Campus::find($id)->delete();
        return redirect()->route('admin.locationindex')->with('success', 'Successfully Deleted');
    }

    public function locationIndex(Request $request)
    {
         $locations = Campus::all();
        return view('admin.location.index', compact('locations'));

    }

}