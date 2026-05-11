<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function store(Request $request){
    dd($request);
    // Container::create();

}
}
