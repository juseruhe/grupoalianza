<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gender;

class GenderController extends Controller
{
    
    public function index(){

        $genders = Gender::all();

        return view('gender.index',compact('genders'));

    }

    public function create(){

        return view('gender.create');
    }

    public function store(Request $request){

        Gender::create($request->all());

        return redirect()->route('gender.index');
    }

    public function show($id){

        $genders = Gender::find($id)
        ->where('id','=',$id)
        ->get();

       return view('gender.show',compact('genders'));
    }

    public function edit($id){

        $genders = Gender::find($id)
        ->where('id','=',$id)
        ->get();

       return view('gender.edit',compact('genders'));
    }

    public function update(Request $request,$id){

        Gender::find($id)->update($request->all());


        return redirect()->route('gender.show',$id);
    }

    public function destroy($id){

        Gender::find($id)->delete();

        return redirect()->route('gender.index');
    }
}
