<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Document_Type;

class Document_TypeController extends Controller
{
    

    public function index(){

     $document_types = Document_Type::all();

     return view('document_type.index',compact('document_types'));
    }


    public function create(){

        return view('document_type.create');
    }

    public function store(Request $request){

        Document_Type::create($request->all());

        return redirect()->route('document_type.index');
    }

    public function show($id){

        $document_types = Document_Type::find($id)
        ->where('id','=',$id)
        ->get();

        return view('document_type.show',compact('document_types'));
    }

    public function edit($id){

        $document_types = Document_Type::find($id)
        ->where('id','=',$id)
        ->get();

        return view('document_type.edit',compact('document_types'));
    }

    public function update(Request $request,$id){

        Document_Type::find($id)->update($request->all());


        return redirect()->route('document_type.show',$id);
    }


    public function destroy($id){

        Document_Type::find($id)->delete();

        return redirect()->route('document_type.index');
    }

}
