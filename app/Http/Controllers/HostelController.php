<?php

namespace App\Http\Controllers;

use App\Hostel;
use App\Campus;
use App\Room;
use App\HostelImage;
use Illuminate\Http\Request;

class HostelController extends Controller
{
	
	public function __construct(){
		$this->middleware('auth:admin');
	}
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
	
		$hostel = Hostel::orderBy('campus_id')->get();
		$campus = Campus::all();
		return view('admin.hostel.index')->with(
			['hostels' => $hostel, 'campuses' => $campus]);
	}
	
	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		
	}
	
	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{


		$this->validate($request, [
			'name' => 'required',
			'campus' => 'required',
			'type' => 'required',
            'description'=>'required',

			]);

        //check if the hostel already added
        $host_exist = Hostel::where('name',$request->name)->first();

        if($host_exist){

            return redirect()->route('hostels.index', $request->hostel_id)->with('error', 'Hostel name already be taken');
        }
			
			$campus_id = Campus::find($request->campus);

			$hostels = new Hostel;
			$hostels->name = $request->name;
			$hostels->type = $request->type;
			$hostels->campus()->associate($campus_id);
			$hostels->description = $request->description;
            $hostels->location = $request->location;
			$hostels->save();

			//save the hostel images or file

              if($request->hasFile('file')){

                  $destinaton_path = '/photo';   //directory or public folder to save files
                  $photos = $request->file('file');

                  foreach ($photos as $photo){

                      $hostelImage = new HostelImage;

                      $file_name = $photo->getClientOriginalName(); //get each file name.
                      $movefile = date('ymdgis') . $file_name ; //rename  the files;
                      $photo->move(public_path($destinaton_path) ,date('ymdgis').$file_name);

                      $hostelImage->hostel_id = $hostels->id;
                      $hostelImage->photo = $movefile;
                      $hostelImage->save();

                  }
              }


			return redirect()->route('hostels.index')->with('success', 'Hostel successfully created');
		}
		
		/**
		* Display the specified resource.
		*
		* @param  \App\Hostel  $hostel
		* @return \Illuminate\Http\Response
		*/
		public function show(Hostel $hostel)
		{
			$campus_id = $hostel->campus_id;
			$hostel_id = $hostel->id;

			$rooms = Room::where([
				['campus_id', '=', $campus_id],
				['hostel_id', '=', $hostel_id]
		  ])->orderBy('floor', 'desc')->get();
			
		  
			return view('admin.rooms.index')->withHostel($hostel)->withRooms($rooms);
		}
		
		/**
		* Show the form for editing the specified resource.
		*
		* @param  \App\Hostel  $hostel
		* @return \Illuminate\Http\Response
		*/
		public function edit(Hostel $hostel)
		{
			//
		}
		
		/**
		* Update the specified resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @param  \App\Hostel  $hostel
		* @return \Illuminate\Http\Response
		*/
		public function update(Request $request, Hostel $hostel)
		{
			
		}
		
		/**
		* Remove the specified resource from storage.
		*
		* @param  \App\Hostel  $hostel
		* @return \Illuminate\Http\Response
		*/
		public function destroy(Hostel $hostel)
		{
			// $hostel->delete();
			// return redirect()->route('hostels.create')->with('success', 'Deleted successfully');
		}
	}