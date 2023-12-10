<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class FoodController extends Controller
{
//Te retornará a la vista principal
public function principal(){
return view('food.principal');
}
//Te retornará a la vista nosotros
public function we(){
  return view('food.we'); 
}
public function list(){
   return view('food.list'); 
}
public function breakfast(){
   return view('food.breakfast'); 
}
public function main(){
    return view('food.main');
}
public function drink(){
    return view('food.drink');
}
public function sesion(){
return view('food.sesion');

}
public function comment(){
return view('food.comment');

}
//Para añadir registro
public function add(Request $request){
$client= new Client();//Creamos un nuevo cliente
$report=new Report();//Creamos un nuevo reporte
$client->name=$request->name;
$client->email=$request->email;
$client->dni=$request->dni;
$report->comment=$request->comment;
$consulta="CALL InsertClientAndReport('$client->dni','$client->name','$client->email','$report->comment')";
DB:: insert($consulta);
return redirect()->route('food.comment');
}

public function found(Request $request)
{
    $user = new User();
    $user->email = $request->email;
    $user->password = $request->password;

    // Utiliza el método select para obtener resultados de la consulta
    $user->access = DB::select("CALL CheckUserAccess('$user->email', '$user->password')");
    $user->name=DB::select("CALL ListUserAccess('$user->email','$user->password')");
    if ( (int)$user->access == 1) {
        $consulta="CALL GetClientsWithComments()";
    $resultado=DB::select($consulta);
    return view('food.listClient', compact('resultado'));
    } else {
        return view('food.sesion');
    }



}
public function foodFormUpdate($dni){
$consulta="CALL GetClientDataByDNI('$dni')";
$resultado=DB::select($consulta);
return view('food.foodFormUpdate',compact('resultado'));
}
public function updateRecord($dni, Request $request){
$comentario=$request->comment;
$consulta="CALL UpdateReportComment('$dni','$comentario')";
DB::update($consulta);//Actualizamos los datos
//Obtenemos el listado de los clientes
$listado="CALL GetClientsWithComments()";
$resultado=DB::select($listado);
return view('food.listClient', compact('resultado'));
}

public function deleteRecord($dni){
$consulta="CALL DeleteClientAndReport('$dni')";
DB::delete($consulta);
//Obtenemos el listado de los clientes
$listado="CALL GetClientsWithComments()";
$resultado=DB::select($listado);
return view('food.listClient', compact('resultado'));
}


public function showReport($dni){
$report="CALL GetClientReport('$dni')";
$result=DB::select($report);
return view('food.foodReport',compact('result'));
}
public function listClient(){
 //Obtenemos el listado de los clientes
$listado="CALL GetClientsWithComments()";
$resultado=DB::select($listado);
return view('food.listClient', compact('resultado'));
}
}
