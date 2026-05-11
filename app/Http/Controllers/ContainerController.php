<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function store(Request $request){
    // dd($request);
    Container::create($request->all());
    return view ('edit');

}
public function update(Container $container, Request $request){
    $container->update($request->all());
    return view ('edit');
}
public function edit(Container $container){
    return view('edit');

}



}
