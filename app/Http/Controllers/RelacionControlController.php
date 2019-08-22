<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ControlRequest;
use App\User;
use App\Nivel;
use App\Estatus;
use App\Periodo;
use App\Asignatura;
use App\Grupo;
use App\RelacionControl;

class RelacionControlController extends Controller
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
        $relaciones = RelacionControl::orderBy('id','ASC')->get();
        $relaciones->each(function($relaciones){
            $relaciones->asignaturar;
            $relaciones->grupor;
            $relaciones->periodo1;
            $relaciones->userm;
            $relaciones->useral;
        });
        
        $listaMa = User::where('nivel',2)->where('estatus',1)->orderBY('nombres','ASC')->pluck('nombres','id');

        $listaAl = User::where('nivel',3)->where('estatus',1)->orderBY('nombres','ASC')->pluck('nombres','id');

        $listaA = Asignatura::where('estatus',1)->orderBY('estatus','ASC')->pluck('nombre','id');

        $listaG = Grupo::where('estatus',1)->orderBY('nombre','ASC')->pluck('nombre','id');

        $listaP = Periodo::where('estatus',1)->orderBY('periodo','ASC')->pluck('periodo','id');

        return view('relacion.index')->with('listaMa', $listaMa)->with('listaAl', $listaAl)->with('listaA', $listaA)->with('listaG', $listaG)->with('listaP', $listaP)->with('relaciones', $relaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relacion_control.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ControlRequest $request)
    {
        $relacion = new RelacionControl($request->all());
        $relacion->id_grupo = $request->gruposel;
        $relacion->id_asignatura = $request->asignaturasel;
        $relacion->id_periodo = $request->periodosel;
        $relacion->id_maestro = $request->maestrosel;
        $relacion->id_alumno= $request->alumnosel;
        $relacion->save();

        $notification = array(
            'message' => 'La relacion se ha creado Exitosamente', 
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

        $id = $request->edit_idr;
        $data= RelacionControl::find($id);
        $data->id_grupo=$request->edit_gruposel;
        $data->id_asignatura=$request->edit_asignaturasel;
        $data->id_periodo=$request->edit_periodosel;
        $data->id_maestro=$request->edit_maestrosel;
        $data->id_alumno=$request->edit_alumnosel;
        $data->save();

        $notification = array(
            'message' => 'La relacion se ha actualizado Exitosamente', 
            'alert-type' => 'success'
        );

        return back();
    }

    public function view(Request $request){
        if($request->ajax()){
                $id = $request->id;
                $info = RelacionControl::find($id);
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
        //
    }
}
