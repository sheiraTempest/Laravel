<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;


class GudangController extends Controller
{
    
    public function index(){
        $gudang = Gudang::all();
        return view('gudang.index',compact(['gudang']));
    }

    public function create()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Gudang::create($request->except(['_token','submit']));
        return redirect('/gudang');
    }

    public function edit($id)
    {
        $gudang = Gudang::find($id);
        return view('gudang.edit',compact(['gudang']));
    }

    public function update($id, request $request)
    {
        $gudang = Gudang::find($id);
        $gudang->update($request->except(['_token','submit']));
        return redirect('/gudang');
    }

    public function destroy($id)
    {
        $gudang = Gudang::find($id);
        $gudang->delete();
        return redirect('/gudang');
    }
}
