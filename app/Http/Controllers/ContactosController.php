<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Contacto;
class ContactosController extends Controller
{
    public function mostrar(){
        $directorios = Directorio::all();
        return view('directorio', compact('directorios'));
    }
    public function agregarDirectorio(){

return view('crearEntrada');
}
public function agregarDirectorioSalvar(Request $request){
$directorio = new Directorio();
$directorio->codigoEntrada = $request->codigoEntrada;
$directorio->nombre = $request->nombre;
$directorio->apellido = $request->apellido;
$directorio->telefono = $request->telefono;
$directorio->correo = $request->correo;
$directorio->save();

return redirect(route('inicio'));
}

public function buscar(){
return view('buscar');
}

public function buscarDirectorio(Request $email){
$directorio = Directorio::where('correo', $email->correo);

return view('vercontactos',compact('directorio'));
}
}