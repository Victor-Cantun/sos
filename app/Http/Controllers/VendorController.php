<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Vendors = Vendor::all();
        //$Departments = Department::all();
        //$user=Auth::user();
        //return $Employees;
        return view('Vendors.index', compact('user','Vendors'));
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
        if($request->file('photo')){
            $photo = $request->file('photo')->store('public/Vendors');
            $url = Storage::url($photo);
            //$Customer -> photo = $url;
        }else{
            $url = 'images/users/sin-foto.png';
        }
        $Vendor = new Vendor();
        $Vendor -> photo = $url;
        $Vendor -> rfc = $request -> input('rfc');  
        $Vendor -> name = $request -> input('name');        
        $Vendor -> phone = $request -> input('phone');
        $Vendor -> cellphone = $request -> input('cellphone');
        $Vendor -> email = $request -> input('email');
        $Vendor -> city = $request -> input('city');
        $Vendor -> state = $request -> input('state');
        $Vendor -> colony = $request -> input('colony');
        $Vendor -> postalcode = $request -> input('postalcode');
        $Vendor -> address = $request -> input('address');
        $Vendor -> bank = $request -> input('bank'); 
        $Vendor -> bankaccount = $request -> input('bankaccount'); 
        $Vendor -> interbankaccount = $request -> input('interbankaccount');         
        $Vendor ->save();
        //return $post ->id;
        return redirect()-> route('Vendors.index')->with('success','REGISTRO REALIZADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Vendor = Vendor::find($id);
        //return $Employee;
        //$user=Auth::user();
        return view('Vendors.show',compact('Vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$Departments = Department::all();
        $Vendor = Vendor::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Vendors.edit',compact('Vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        //return $request->file('photo');
        $Vendor = Vendor::find($id);
        if($request->file('photo')){
            $photo = $request->file('photo')->store('public/Vendors');
            $url = Storage::url($photo);
            $Vendor -> photo = $url;
        }
        $Vendor -> name = $request -> input('name');
        $Vendor -> name = $request -> input('name');         
        $Vendor -> phone = $request -> input('phone');
        $Vendor -> cellphone = $request -> input('cellphone');
        $Vendor -> email = $request -> input('email');
        $Vendor -> city = $request -> input('city');
        $Vendor -> state = $request -> input('state');
        $Vendor -> colony = $request -> input('colony');
        $Vendor -> postalcode = $request -> input('postalcode');
        $Vendor -> address = $request -> input('address');
        $Vendor -> bank = $request -> input('bank'); 
        $Vendor -> bankaccount = $request -> input('bankaccount'); 
        $Vendor -> interbankaccount = $request -> input('interbankaccount');           
        $Vendor -> save();
       return redirect()-> route('Vendors.index')->with('success','REGISTRO ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vendor = Vendor::find($id);
        $Vendor -> delete();
        return redirect()->route('Vendors.index')->with('success','REGISTRO ELIMINADO');
    }
}
