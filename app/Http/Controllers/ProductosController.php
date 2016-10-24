<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        // dd($productos[0]);
        return view('productos.index')->with(['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($input = $request->all());

        $this->validate($request, [
            'nombre' => 'required',
        ]);

       /* $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'integer',
            'unidad' => 'required',
            'tipo' => 'required',
            'medida' => 'required'
        ]);*/






        $input = $request->all();
 //dd($input);

        Productos::create($input);

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
