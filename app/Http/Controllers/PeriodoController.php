<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PeriodoRequest;
use App\Periodo;
use App\Estatus;

class PeriodoController extends Controller
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
        $periodos = Periodo::orderBy('id','ASC')->get();
        $periodos->each(function($periodos){
            $periodos->estatusp;
        });

        $listaE = Estatus::orderBY('estatus','ASC')->pluck('estatus','id');

        return view('periodos.index')->with('periodos', $periodos)->with('listaE',$listaE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeriodoRequest $request)
    {
        $periodo = new Periodo($request->all());
        $periodo->periodo=strtoupper($request->periodo);
        $periodo->save();

        $notification = array(
            'message' => 'El periodo se ha creado Exitosamente', 
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

        $id = $request->edit_idp;
        $data= Periodo::find($id);
        $data->periodo= strtoupper($request->edit_Nombre_periodo);
        $data->estatus=$request->edit_estatusp;
        $data->save();

        $notification = array(
            'message' => 'El periodo se ha actualizado Exitosamente', 
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function view(Request $request){
        if($request->ajax()){
                $id = $request->id;
                $info = Periodo::find($id);
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
        $periodos = Periodo::find($id);
        if($periodos->estatus == 2){
            $periodos->estatus = 1;
            $periodos->save();

            $notification = array(
                'message' => 'El periodo se ha activado Exitosamente', 
                'alert-type' => 'success'
            );
            return redirect()->route('periodo.index')->with($notification);
        }else{
            $periodos->estatus = 2;
            $periodos->save();

            $notification = array(
                'message' => 'El periodo se ha desactivado Exitosamente', 
                'alert-type' => 'error'
            );
            return redirect()->route('periodo.index')->with($notification);
        }
    }
}
