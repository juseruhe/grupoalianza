<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;

use App\Models\Country;

class CityController extends Controller
{

    public function index(){

        $cities = City::all();

        return view('city.index',compact('cities'));
    }

    public function create(){

        $countries = Country::all();

        return view('city.create',compact('countries'));
    }

    public function store(Request $request){

        City::create($request->all());

        return redirect()->route('city.index');
    }

    public function show($id){

   $cities = City::find($id)
   ->where('id','=',$id)
   ->get();

   return view('city.show', compact('cities'));

    }

    public function edit($id){

        $cities = City::find($id)
   ->where('id','=',$id)
   ->get();

   $countries = Country::all();

   return view('city.edit',compact('cities','countries'));

    }
    
    public function update(Request $request,$id){


        City::find($id)->update($request->all());

        return redirect()->route('city.show',$id);

    }

    public function destroy($id){

      City::find($id)->delete();

      return redirect()->route('city.index');
    }
}
