<?php

namespace App\Http\Controllers;

use App\Models\Reparacion;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;

class CatalogController extends Controller
{
    //
    public function getIndex(){
        $reparacion = Reparacion::all();
        return view('catalog.index', ['arrayReparaciones' => $reparacion]);
    }

    public function getShow($id){
        $reparacion= Reparacion::findOrFail($id);
        return view('catalog.show', array('reparacion'=>$reparacion));
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function getEdit($id){
        $reparacion = Reparacion::findOrFail($id);
        return view('catalog.edit', array('reparacion'=>$reparacion));
    }

    public function getDelete($id){
        $reparacion = Reparacion::findOrFail($id);
        $reparacion->delete();
        return redirect('/');
    }

    public function postIndex(Request $request){
        $id_cliente = $request->input('id_cli');
        $id = Reparacion::where('id_cliente',$id_cliente)->get();
        if (!$id->isEmpty()){
            return view('catalog.search', ['arrayReparaciones' => $id]);
        }
        return redirect('/catalog');
    }

    public function PDF($id){
        $reparacion = Reparacion::findOrFail($id);
        $pdf = \PDF::loadView('catalog.download',array('reparacion'=>$reparacion));
        
        //$pdf = App::make('dompdf.wrapper');
       // $pdf -> loadView('catalog.download');
        return $pdf->stream();
    }

    public function postCreate(Request $request){
        $createReparacion = new Reparacion;
        $createReparacion->id_cliente = $request->input('id_cliente');
        $createReparacion->serial = $request->input('serial');
        $createReparacion->marca_linea = $request->input('marca_linea');
        $createReparacion->imagen = $request->input('imagen');
        $createReparacion->observaciones = $request->input('observaciones');
        $createReparacion->fecha_ing = $request->input('fecha_ing');
        $createReparacion->fecha_sal = $request->input('fecha_sal');
        $createReparacion->estado = $request->input('estado');
        $createReparacion->desc_problema = $request->input('desc_problema');
        $createReparacion->precio = $request->input('precio');
        $createReparacion->id_empleado = $request->input('id_empleado');
        $createReparacion->save();

        return redirect('/catalog');
    }

    public function putEdit(Request $request){
        $editReparacion = Reparacion::findOrFail($request->id);
        $editReparacion->id_cliente = $request->input('id_cliente');
        $editReparacion->serial = $request->input('serial');
        $editReparacion->marca_linea = $request->input('marca_linea');
        $editReparacion->imagen = $request->input('imagen');
        $editReparacion->observaciones = $request->input('observaciones');
        $editReparacion->fecha_ing = $request->input('fecha_ing');
        $editReparacion->fecha_sal = $request->input('fecha_sal');
        $editReparacion->estado = $request->input('estado');
        $editReparacion->desc_problema = $request->input('desc_problema');
        $editReparacion->precio = $request->input('precio');
        $editReparacion->id_empleado = $request->input('id_empleado');
        $editReparacion->save();
        return redirect('/catalog/show/'.$request->id);
    }
    
}
