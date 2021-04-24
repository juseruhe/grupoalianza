<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Position;

class PositionController extends Controller
{

    public function index(){

        $positions = Position::all();

        return view('position.index',compact('positions'));

    }

    public function create(){
        return view('position.create');
    }

    public function store(Request $request){

     Position::create($request->all());

     return redirect()->route('position.index');
    }

    public function show($id){

       $positions= Position::find($id)
        ->where('id','=', $id)
        ->get();

         return view('position.show',compact('positions'));
    }

    public function edit($id){

        $positions= Position::find($id)
         ->where('id','=', $id)
         ->get();
 
          return view('position.edit',compact('positions'));
     }

     public function update(Request $request,$id){

        Position::find($id)->update($request->all());

        return redirect()->route('position.show',$id);

     }

     public function destroy($id){

        Position::find($id)->delete();

        return redirect()->route('position.index');
     }
}
