<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\TestImport;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTest = Test::all(); // Se manda a llamar todos los campos de la tabla 'tests'
        return view('test.index')->with('tests', $allTest);
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
        /*$test = new Test();
        $test->pregunta = $request->get('pregunta');
        $test->respuesta = $request->get('respuesta');
        $test->save();
        return redirect('/test');*/
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
}
