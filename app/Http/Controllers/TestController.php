<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use App\Models\Options;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\TestImport;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();//Se identifica al usuario que entro
        $allTest = User::find($user->id)->tests()->get();//Se encuentran las preguntas que le corresponden al usuario
        $options = Options::all();//Tomamos todas las preguntas
        $questions = Test::all();
        return view('test.index')->with('tests', $allTest)->with('options',$options)->with('questions',$questions);//Mostramos la vista y enviamos la informacion para mostrarla

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
    }
    /*
    *
    *METODOS AÑADIDOS POR MI
    *
    */
    public function importExcel(Request $request) {
        $file = $request->file('ruta');
        Excel::import(new TestImport, $file);
        return redirect('/test');
    }
    public function addOption( $id = 'none' ){
        return view('test.addoption')->with('id', $id);
    }
    public function viewOption( $id = 'none' ){
        $tests = Test::all();
        $option = Options::all();
        return view('test.viewOption')->with('id', $id)->with('tests', $tests)->with('options', $option);
    }
    public function assignmentQ( $id = 'none' ){
        $allUsers = User::all(); // Se manda a llamar todos los campos de la tabla 'users'
        return view('test.assignment')->with('id', $id)->with('users', $allUsers);
    }
}
