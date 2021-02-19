<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Contracts\Session\Session;
use League\CommonMark\Extension\Table\Table;
use Illuminate\Support\Facades\App;

class ClientesController extends Controller
{
     //
    public function getIndex(){
        $cliente = Client::all();
        return view('clientes.index', ['arrayClientes' => $cliente]);
    }

    public function getCreate(){
        return view('clientes.create');
    }

    public function getEdit($id){
        $cliente = Client::findOrFail($id);
        return view('clientes.edit', array('cliente'=>$cliente));
    }

    public function getDelete($id){
        $cliente = Client::findOrFail($id);
        $cliente->delete();
        return redirect('/clientes');
    }

    public function postIndex(Request $request){
        $id_cliente = $request->input('id_cli');
        $id = Client::where('id_cliente',$id_cliente)->get();
        if (!$id->isEmpty()){
            return view('clientes.search', ['arrayClientes' => $id]);
        }
        return redirect('/clientes');
    }

    public function postCreate(Request $request){
        $createCliente = new Client;
        $createCliente->id_cliente = $request->input('id_cliente');
        $createCliente->nom_cliente = $request->input('nom_cliente');
        $createCliente->ape_cliente = $request->input('ape_cliente');
        $createCliente->tel_cliente = $request->input('tel_cliente');
        $createCliente->email_cliente = $request->input('email_cliente');
        $createCliente->dir_cliente = $request->input('dir_cliente');
        $createCliente->save();

        return redirect('/clientes');
    }

    public function putEdit(Request $request){
        $editCliente = Client::findOrFail($request->id);
        $editCliente->id_cliente = $request->input('id_cliente');
        $editCliente->nom_cliente = $request->input('nom_cliente');
        $editCliente->ape_cliente = $request->input('ape_cliente');
        $editCliente->tel_cliente = $request->input('tel_cliente');
        $editCliente->email_cliente = $request->input('email_cliente');
        $editCliente->dir_cliente = $request->input('dir_cliente');
        $editCliente->save();
        return redirect('/clientes');
    }
}
