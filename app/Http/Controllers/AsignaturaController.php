<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignatura;
use App\Estatus;

class AsignaturaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');///se configura en midlewere/autenticate para proteger las rutas
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = Asignatura::orderBy('id','ASC')->get();
        $asignaturas->each(function($asignaturas){
            $asignaturas->estatusa;
        });

        $listaE = Estatus::orderBY('estatus','ASC')->pluck('estatus','id');

        return view('asignaturas.index')->with('asignaturas', $asignaturas)->with('listaE',$listaE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignatura = new Asignatura($request->all());
        $asignatura->nombre=strtoupper($request->Nombre_asignatura);
        $asignatura->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function actualiza(Request $request){

        $id = $request->edit_ida;
        $data= Asignatura::find($id);
        $data->nombre= strtoupper($request->edit_Nombre_asignatura);
        $data->estatus=$request->edit_estatusa;
        $data->save();

        return back();
    }

    public function view(Request $request){
        if($request->ajax()){
                $id = $request->id;
                $info = Asignatura::find($id);
                return response()->json($info);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asignaturas = Asignatura::find($id);
        if($asignaturas->estatus == 2){
            $asignaturas->estatus = 1;
            $asignaturas->save();
            return redirect()->route('asignatura.index');
        }else{
            $asignaturas->estatus = 2;
            $asignaturas->save();
            return redirect()->route('asignatura.index');
        }
    }
}
