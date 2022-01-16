<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Vehicles = Vehicle::all();
        //$Departments = Department::all();
        //$user=Auth::user();
        //return $Employees;
        return view('Vehicles.index', compact('user','Vehicles'));
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
            $photo = $request->file('photo')->store('public/Vehicles');
            $url = Storage::url($photo);
            //$Customer -> photo = $url;
        }else{
            $url = 'images/sin_foto.jpeg';
        }
        $Vehicle = new Vehicle();
        $Vehicle -> photo = $url;
        $Vehicle -> vehiclekey = $request -> input('vehiclekey');  
        $Vehicle -> model = $request -> input('model');        
        $Vehicle -> plates = $request -> input('plates');
        $Vehicle -> mark = $request -> input('mark');
        $Vehicle -> motor = $request -> input('motor');
        $Vehicle -> chassis = $request -> input('chassis');
        $Vehicle -> color = $request -> input('color');
        $Vehicle -> invoicenumber = $request -> input('invoicenumber');
        $Vehicle -> trafficcard = $request -> input('trafficcard');      
        $Vehicle ->save();
        //return $post ->id;
        return redirect()-> route('Vehicles.index')->with('success','REGISTRO REALIZADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Vehicle = Vehicle::find($id);
        //return $Employee;
        //$user=Auth::user();
        return view('Vehicles.show',compact('Vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$Departments = Department::all();
        $Vehicle = Vehicle::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Vehicles.edit',compact('Vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        //return $request->file('photo');
        $Vehicle = Vehicle::find($id);
        if($request->file('photo')){
            $photo = $request->file('photo')->store('public/Vehicles');
            $url = Storage::url($photo);
            $Vehicle -> photo = $url;
        }
        $Vehicle -> vehiclekey = $request -> input('vehiclekey');
        $Vehicle -> model = $request -> input('model');         
        $Vehicle -> plates = $request -> input('plates');
        $Vehicle -> mark = $request -> input('mark');
        $Vehicle -> motor = $request -> input('motor');
        $Vehicle -> chassis = $request -> input('chassis');
        $Vehicle -> color = $request -> input('color');
        $Vehicle -> invoicenumber = $request -> input('invoicenumber');
        $Vehicle -> trafficcard = $request -> input('trafficcard');        
        $Vehicle -> save();
       return redirect()-> route('Vehicles.index')->with('success','REGISTRO ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vehicle = Vehicle::find($id);
        $Vehicle -> delete();
        return redirect()->route('Vehicles.index')->with('success','REGISTRO ELIMINADO');
    }
}
