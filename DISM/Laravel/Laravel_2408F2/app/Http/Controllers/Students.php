<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;

class Students extends Controller
{
    public function welcome(){
        return view("welcome");
    }

    public function create(){
        return view("create");
    }

    public function store(Request $req){
        $imagepath = time().".".$req->si->extension();
        $req->si->move(public_path("uploads"), $imagepath);

        $stddata = new studentmodel;
        $stddata->name = $req["sn"];
        $stddata->age = $req["sa"];
        $stddata->city = $req["sc"];
        $stddata->picture = $imagepath;
        $stddata->save();
        return view("create");
    }

    public function read(){
        $fet = studentmodel::all();
        $data = compact("fet");
        return view("read")->with($data);
    }

    public function delete($id){
       $found = studentmodel::find($id);
       $found->delete();
       return back();
    }

    public function edit($id){
        $found = studentmodel::find($id);
        return view('edit', ['id'=>$found]);
     }

     public function update($identity, Request $req){
        $found = studentmodel::find($identity);

        $imagepath = time().".".$req->si->extension();
        $req->si->move(public_path("uploads"), $imagepath);

        $found->name = $req["sn"];
        $found->age = $req["sa"];
        $found->city = $req["sc"];
        $found->picture = $imagepath;
        $found->save();
        return redirect("read");
     }
}
