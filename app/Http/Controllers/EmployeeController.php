<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Employees = Employee::all();
        $Departments = Department::all();
        $Categories = Category::all();
        //$user=Auth::user();
        //return $Employees;
        return view('Employees.index', compact('user','Employees','Departments','Categories'));
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
            $photo = $request->file('photo')->store('public/Customers');
            $url = Storage::url($photo);
            //$Customer -> photo = $url;
        }else{
            $url = 'images/users/sin-foto.png';
        }

        $Employee = new Employee();
        $Employee -> photo = $url;
        $Employee -> name = $request -> input('name');
        $Employee -> surnames = $request -> input('surnames');  
        $Employee -> rfc = $request -> input('rfc');
        $Employee -> curp = $request -> input('curp');
        $Employee -> socialsecurity = $request -> input('socialsecurity');  
        $Employee -> email = $request -> input('email');
        $Employee -> cellphone = $request -> input('cellphone');
        $Employee -> phone = $request -> input('phone');
        $Employee -> dateofbirth = $request -> input('dateofbirth');
        $Employee -> postalcode = $request -> input('postalcode');
        $Employee -> city = $request -> input('city');
        $Employee -> state = $request -> input('state');
        $Employee -> colony = $request -> input('colony');        
        $Employee -> address = $request -> input('address');
        $Employee -> department = $request -> input('department');
        $Employee -> dateadmission = $request -> input('dateadmission');
        $Employee -> bankaccount = $request -> input('backaccount');
        $Employee -> employment = $request -> input('employment');
        $Employee -> facebook = $request -> input('facebook');
        $Employee -> twitter = $request -> input('twitter');
        $Employee -> instagram = $request -> input('instagram');
        $Employee -> linkedin = $request -> input('linkedin');
        $Employee -> skype = $request -> input('skype');
        $Employee -> github = $request -> input('github');
        $Employee -> primary = $request -> input('primary');
        $Employee -> secondary = $request -> input('secondary');
        $Employee -> degree = $request -> input('degree');
        $Employee -> mastery = $request -> input('mastery');
        $Employee -> doctorate = $request -> input('doctorate');
        $Employee -> tshirt = $request -> input('tshirt');
        $Employee -> pans = $request -> input('pans');
        $Employee -> cap = $request -> input('cap');
        $Employee -> laceboot = $request -> input('laceboot');
        $Employee -> oilboot = $request -> input('oilboot');
        $Employee -> rubberboot = $request -> input('rubberboot');
        $Employee -> overalls = $request -> input('overalls');
        $Employee -> gloves = $request -> input('gloves');
        $Employee -> lenses = $request -> input('lenses');
        $Employee -> jacket = $request -> input('jacket');
        $Employee -> waterproof = $request -> input('waterproof');
        $Employee ->save();
        //return $post ->id;
        return redirect()-> route('Employees.index')->with('success','REGISTRO REALIZADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Employee = Employee::find($id);
        //return $Employee;
        //$user=Auth::user();
        return view('Employees.show',compact('Employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Departments = Department::all();
        $Employee = Employee::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Employees.edit',compact('Employee','Departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        //return $request->file('photo');
        $Employee = Employee::find($id);
        if($request->file('photo')){
            $photo = $request->file('photo')->store('public/Employees');
            $url = Storage::url($photo);
            $Employee -> photo = $url;
        }
        $Employee -> name = $request -> input('name');
        $Employee -> surnames = $request -> input('surnames');  
        $Employee -> phone = $request -> input('phone');
        $Employee -> cellphone = $request -> input('cellphone');
        $Employee -> email = $request -> input('email');
        $Employee -> city = $request -> input('city');
        $Employee -> state = $request -> input('state');
        $Employee -> colony = $request -> input('colony');
        $Employee -> postalcode = $request -> input('postalcode');
        $Employee -> address = $request -> input('address');
        $Employee -> department = $request -> input('department');
        $Employee -> facebook = $request -> input('facebook');
        $Employee -> twitter = $request -> input('twitter');
        $Employee -> instagram = $request -> input('instagram');
        $Employee -> linkedin = $request -> input('linkedin');
        $Employee -> skype = $request -> input('skype');
        $Employee -> github = $request -> input('github');
        $Employee -> tshirt = $request -> input('tshirt');
        $Employee -> pans = $request -> input('pans');
        $Employee -> cap = $request -> input('cap');
        $Employee -> laceboot = $request -> input('laceboot');
        $Employee -> oilboot = $request -> input('oilboot');
        $Employee -> rubberboot = $request -> input('rubberboot');
        $Employee -> overalls = $request -> input('overalls');
        $Employee -> gloves = $request -> input('gloves');
        $Employee -> lenses = $request -> input('lenses');
        $Employee -> jacket = $request -> input('jacket');
        $Employee -> save();
       return redirect()-> route('Employees.index')->with('success','REGISTRO ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Employee = Employee::find($id);
        $Employee -> delete();
        return redirect()->route('Employees.index')->with('success','REGISTRO ELIMINADO');
    }
}
