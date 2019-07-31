<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Nivel;
use App\Estatus;
use App\Grupo;
use App\RelacionControl;


class UserController extends Controller
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
        $users = User::orderBy('id','ASC')->get();
        $users->each(function($users){
            $users->estatus1;
            $users->nivel1;
        });

        $listaN = Nivel::orderBY('nombre_nivel','ASC')->pluck('nombre_nivel','id');

        $listaE = Estatus::orderBY('estatus','ASC')->pluck('estatus','id');

        return view('usuarios.index')->with('users', $users)->with('listaN',$listaN)->with('listaE',$listaE);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->nombres=strtoupper($request->Nombre_usuario);
        $user->apellidos=strtoupper($request->Apellido_usuario);
        $user->backup_pass=$request->password;
        $user->password=bcrypt($request->password);
        $user->save();

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

    public function vistam(){

        $gru = RelacionControl::select('id_grupo')->where('id_maestro',Auth::User()->id)->groupBy('id_grupo')->orderBY('id','asc')->get();
    
        $gru->each(function($gru){
            $gru->grupor;
        });

        return view('maestro.index')->with('gru',$gru);
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

        $id = $request->edit_id;
        $data= User::find($id);
        $data->nombres= strtoupper($request->edit_Nombre_usuario);
        $data->apellidos=$request->edit_apellidos;
        $data->backup_pass=$request->edit_password;
        $data->password=bcrypt($request->edit_password);
        $data->nivel=$request->edit_nivel;
        $data->estatus=$request->edit_estatus;
        $data->save();

        return back();
    }

    public function view(Request $request){
        if($request->ajax()){
                $id = $request->id;
                $info = User::find($id);
                return response()->json($info);
            }
    }


    public function grupoM($id){

        $asignaturas = RelacionControl::select('id_asignatura'
      )->where('id_grupo',$id)->where('id_maestro',Auth::User()->id)->groupBy('id_asignatura')->orderBY('id','asc')->get();

        $idr = RelacionControl::where('id_grupo',$id)->where('id_maestro',Auth::User()->id)->first();

        $grup = Grupo::find($id);
        $grupo = $grup->nombre;
      

        $asignaturas->each(function($asignaturas){
        $asignaturas->asignaturar;
        });

        return view('maestro.asignaturas')->with('asignaturas',$asignaturas)->with('idr',$idr)->with('grupo',$grupo);

    }

    public function storesub(Request $request){

        
    }


    public function asignaturaM($id){

        $identificador = RelacionControl::find($id);

        $grupo = $identificador->id_grupo;
        $materia = $identificador->id_asignatura;

        $alumnos = RelacionControl::where('id_grupo',$grupo)->where('id_asignatura',$materia)->where('id_maestro',Auth::User()->id)->get();

        $alumnos->each(function($alumnos){
        $alumnos->useral;
        });
        return view('maestro.alumnos')->with('alumnos',$alumnos);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        if($users->estatus == 2){
            $users->estatus = 1;
            $users->save();
            return redirect()->route('user.index');
        }else{
            $users->estatus = 2;
            $users->save();
            return redirect()->route('user.index');
        }

        
    }
}
