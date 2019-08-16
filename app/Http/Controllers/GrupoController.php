<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Estatus;

class GrupoController extends Controller
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
        $grupos = Grupo::orderBy('id','ASC')->get();
        $grupos->each(function($grupos){
            $grupos->estatusg;
        });

        $listaE = Estatus::orderBY('estatus','ASC')->pluck('estatus','id');

        return view('grupos.index')->with('grupos', $grupos)->with('listaE',$listaE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = new Grupo($request->all());
        $grupo->nombre=strtoupper($request->Nombre_grupo);
        $grupo->save();

        $notification = array(
        'message' => 'El Grupo se ha Guardado Exitosamente', 
        'alert-type' => 'success'
        );

        return back()->with($notification);
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

        $id = $request->edit_idg;
        $data= Grupo::find($id);
        $data->nombre= strtoupper($request->edit_Nombre_grupo);
        $data->estatus=$request->edit_estatusg;
        $data->save();

        $notification = array(
        'message' => 'El Grupo se ha actualizado Exitosamente', 
        'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function view(Request $request){
        if($request->ajax()){
                $id = $request->id;
                $info = Grupo::find($id);
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
        $grupos = Grupo::find($id);
        if($grupos->estatus == 2){
            $grupos->estatus = 1;
            $grupos->save();
            return redirect()->route('grupo.index');
        }else{
            $grupos->estatus = 2;
            $grupos->save();
            return redirect()->route('grupo.index');
        }
    }
}
