<?php

namespace App\Http\Controllers;

use App\Campus;
use App\Hostel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){

        $data = Hostel::orderBy('id', 'desc')->with('images', 'rooms', 'campus')->take(9)->get();

        return view('welcome', compact('data'));
    }

    public function show($id){

        $data = Hostel::where('id', $id)->orderBy('id', 'desc')->with('images', 'rooms', 'campus')->first();

        return view('pages.details', compact('data'));
    }

    public function login(){
        return view('welcome1');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function booking(){

        $locations = Campus::all();

         if (isset($_GET['location']) && $_GET['location'] !=""){

             $camId = $_GET['location'];
             $loc = Hostel::orderBy('id', 'desc')->where('campus_id', (int)$camId)->with('images', 'rooms', 'campus')->paginate(21);
             return view('pages.booking', compact('loc', 'locations'));
         }

        elseif (isset($_GET['type']) && $_GET['type'] !=""){

            $ty = $_GET['type'];
            $type = Hostel::orderBy('id', 'desc')->where('type', (int)$ty)->with('images', 'rooms', 'campus')->paginate(21);
            return view('pages.booking', compact('type', 'locations'));
        }

         elseif (isset($_GET['desc']) && $_GET['desc'] !=""){

             $desc = Hostel::orderBy('id', 'desc')->orderBy('created_at', 'desc')->with('images', 'rooms', 'campus')->paginate(21);
             return view('pages.booking', compact('desc', 'locations'));
         }

         elseif (isset($_GET['asc']) && $_GET['asc'] !=""){

             $asc = Hostel::orderBy('id', 'asc')->orderBy('created_at', 'asc')->with('images', 'rooms', 'campus')->paginate(21);
             return view('pages.booking', compact('asc', 'locations'));
         }

         elseif (isset($_GET['low']) && $_GET['low'] !=""){

             $low = Hostel::
                 with(['images', 'rooms' => function ($query) {
                     $query->orderBy('amount', 'asc');
                 }, 'campus'])
                 ->paginate(21);
             return view('pages.booking', compact('low', 'locations'));
         }
         elseif (isset($_GET['high']) && $_GET['high'] !=""){

             $high = Hostel::
             with(['images', 'rooms' => function ($query) {
                 $query->orderBy('amount', 'desc');
             }, 'campus'])
                 ->paginate(21);
             return view('pages.booking', compact('high', 'locations'));
         }
         else{

             $data = Hostel::orderBy('id', 'desc')->with('images', 'rooms', 'campus')->paginate(21);
             return view('pages.booking', compact('data', 'locations'));

         }


    }
}

