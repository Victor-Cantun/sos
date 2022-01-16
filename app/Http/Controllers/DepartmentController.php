<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Departments = Department::all();
        //$user=Auth::user();
        return view('Departments.index', compact('user','Departments'));
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

        $request->validate([
            'name' => 'required|unique:departments',
        ]);

        $Department = new Department();
        $Department -> name = $request -> input('name');  
        $Department -> phone = $request -> input('phone');
        $Department -> cellphone = $request -> input('cellphone');
        $Department -> email = $request -> input('email');
        $Department->save();
        //return $post ->id;
        return redirect()-> route('Departments.index')->with('success','REGISTRO REALIZADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Department = Department::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Departments.show',compact('Department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $Department = Department::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Departments.edit',compact('Department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        $Department = Department::find($id);
        $Department -> name = $request -> input('name');
        $Department -> phone = $request -> input('phone');
        $Department -> cellphone = $request -> input('cellphone');
        $Department -> email = $request -> input('email');
        //$department -> content = $request -> input('content');
        $Department -> save();
       return redirect()-> route('Departments.index')->with('success','REGISTRO ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Department = Department::find($id);
        $Department -> delete();
        return redirect()->route('Departments.index')->with('success','REGISTRO ELIMINADO');
    }
}
