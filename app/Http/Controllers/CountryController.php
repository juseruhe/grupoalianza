<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    
    public function index(){

        $countries = Country::all();


        return view('country.index',compact('countries'));


    }

    public function create(){

        return view('country.create');
    }

    public function store(Request $request){

      Country::create($request->all());

      return redirect()->route('country.index');
    }

    public function  show($id){

    $countries = Country::find($id)
    ->where('id', '=', $id)
    ->get();

    return view('country.show',compact('countries'));
    }

    public function  edit($id){

        $countries = Country::find($id)
        ->where('id', '=', $id)
        ->get();
    
        return view('country.edit',compact('countries'));
        }

        public function update(Request $request,$id){

            Country::find($id)->update($request->all());



            return redirect()->route('country.show',$id);
        }

        public function destroy($id){

            Country::find($id)->delete();

            return redirect()->route('country.index');
        }

}
