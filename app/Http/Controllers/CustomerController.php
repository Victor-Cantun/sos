<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Customers = Customer::all();
        //$Departments = Department::all();
        //$user=Auth::user();
        //return $Employees;
        return view('Customers.index', compact('user','Customers'));
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
        $Customer = new Customer();
        $Customer -> photo = $url;
        $Customer -> rfc = $request -> input('rfc');  
        $Customer -> name = $request -> input('name');        
        $Customer -> phone = $request -> input('phone');
        $Customer -> cellphone = $request -> input('cellphone');
        $Customer -> email = $request -> input('email');
        $Customer -> city = $request -> input('city');
        $Customer -> state = $request -> input('state');
        $Customer -> colony = $request -> input('colony');
        $Customer -> postalcode = $request -> input('postalcode');
        $Customer -> address = $request -> input('address');        
        $Customer ->save();
        //return $post ->id;
        return redirect()-> route('Customers.index')->with('success','REGISTRO REALIZADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Customer = Customer::find($id);
        //return $Employee;
        //$user=Auth::user();
        return view('Customers.show',compact('Customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$Departments = Department::all();
        $Customer = Customer::find($id);
        //return $Department;
        //$user=Auth::user();
        return view('Customers.edit',compact('Customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $id;
        //return $request->file('photo');
        $Customer = Customer::find($id);
        if($request->file('photo')){
            $photo = $request->file('photo')->store('public/Customers');
            $url = Storage::url($photo);
            $Customer -> photo = $url;
        }
        $Customer -> name = $request -> input('name');       
        $Customer -> phone = $request -> input('phone');
        $Customer -> cellphone = $request -> input('cellphone');
        $Customer -> email = $request -> input('email');
        $Customer -> city = $request -> input('city');
        $Customer -> state = $request -> input('state');
        $Customer -> colony = $request -> input('colony');
        $Customer -> postalcode = $request -> input('postalcode');
        $Customer -> address = $request -> input('address');
        $Customer -> save();
       return redirect()-> route('Customers.index')->with('success','REGISTRO ACTUALIZADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Customer = Customer::find($id);
        $Customer -> delete();
        return redirect()->route('Customers.index')->with('success','REGISTRO ELIMINADO');
    }
}
