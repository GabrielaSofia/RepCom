<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function getHome(){
        if (!Auth::check())return redirect('/login');
        return redirect('/catalog');
        //return redirect()->action([CatalogController::class,'getIndex']);
    }
}
?>
