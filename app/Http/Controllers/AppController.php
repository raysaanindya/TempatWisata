<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function hello(){
        $data = ([
            "name"  => "raysa",
        ]);
        return view("hello",$data);
    }

    public function home(){
        return view("home");
    }
    public function data(){
        $wisata = wisata::get();

        $data = ([
            "wisata" => $wisata,
        ]);
        return view("data",$data);
    }
    public function hapus($id){
        wisata::where("id", $id)->delete();
        return redirect("data");
    }
    public function tambah(){
        return view("tambah_wisata");
    }
    public function proses_tambah_wisata(Request $request){
                 $id = $_request->id;
                 $name = $request->name;
                 $location = $request->location;
                 $details = $request->details;
                 $day_open = $request->day_open;
                 $time_open = $request->time_open;
                 $pricing = $request->pricing;

                 wisata::create([
                    "id" => $id,
                    "name" => $name,
                    "location" => $location,
                    "details" => $details,
                    "day_open" => $day-open,
                    "time_open" => $time_open,
                    "pricing" => $pricing
                 ]);

                 session()->flash("pesan","data berhsil ditambah");

                 return redirect("data");
    }
    public function edit($id){
        $wisata = Wisata::where("id",$id)->first();

        if(!$wisata){
            abort(404);
        }

        $data = ([
            "wisata"  => $wisata
        ]);

        return view("edit",$data);
    }
    public function proses_edit_wisata(Request $request){
        $id = $_request->id;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $pricing = $request->pricing;

        wisata::create([
           "id" => $id,
           "name" => $name,
           "location" => $location,
           "details" => $details,
           "day_open" => $day-open,
           "time_open" => $time_open,
           "pricing" => $pricing
        ]);

        session()->flash("pesan","data berhsil ditambah");

        return redirect("data");
}

}
