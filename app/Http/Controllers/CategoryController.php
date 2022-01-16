<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Categories = Category::all();
        //return $Departments;
        //return $Categories->departments;
        //$user=Auth::user();
        return view('Categories.index', compact('user','Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Category = new Category();
        $Category -> name = $request -> input('name');  
        $Category->save();
        //return $post ->id;
        return redirect()-> route('Categories.index')->with('success','REGISTRO REALIZADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Category = Category::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Categories.show',compact('Category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Category = Category::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Categories.edit',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        $Category = Category::find($id);
        $Category -> name = $request -> input('name');
        //$department -> content = $request -> input('content');
        $Category -> save();
       return redirect()-> route('Categories.index')->with('success','REGISTRO ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category = Category::find($id);
        $Category -> delete();
        return redirect()->route('Categories.index')->with('success','REGISTRO ELIMINADO');
    }
}
